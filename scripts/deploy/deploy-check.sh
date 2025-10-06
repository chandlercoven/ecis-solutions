#!/bin/bash

# ECIS Solutions - Deployment Verification Script
# This script helps you verify that your Docker container is using the latest build

echo "🔍 ECIS Solutions - Deployment Status Check"
echo "=============================================="

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    local status=$1
    local message=$2
    if [ "$status" = "OK" ]; then
        echo -e "${GREEN}✅ $message${NC}"
    elif [ "$status" = "WARNING" ]; then
        echo -e "${YELLOW}⚠️  $message${NC}"
    else
        echo -e "${RED}❌ $message${NC}"
    fi
}

# Check if container is running
echo -e "\n${BLUE}1. Container Status${NC}"
if docker ps | grep -q "ecis-solutions"; then
    print_status "OK" "Container is running"
    CONTAINER_ID=$(docker ps | grep "ecis-solutions" | awk '{print $1}')
    echo "   Container ID: $CONTAINER_ID"
else
    print_status "ERROR" "Container is not running"
    exit 1
fi

# Check container creation time
echo -e "\n${BLUE}2. Container Age${NC}"
CREATED_TIME=$(docker inspect ecis-solutions --format='{{.Created}}' 2>/dev/null)
if [ $? -eq 0 ]; then
    echo "   Created: $CREATED_TIME"
    # Convert to readable format and check if recent (within last hour)
    CREATED_EPOCH=$(date -d "$CREATED_TIME" +%s 2>/dev/null || echo "0")
    CURRENT_EPOCH=$(date +%s)
    AGE_SECONDS=$((CURRENT_EPOCH - CREATED_EPOCH))
    AGE_MINUTES=$((AGE_SECONDS / 60))
    
    if [ $AGE_MINUTES -lt 60 ]; then
        print_status "OK" "Container is recent (${AGE_MINUTES} minutes old)"
    else
        print_status "WARNING" "Container is ${AGE_MINUTES} minutes old - consider rebuilding"
    fi
else
    print_status "ERROR" "Could not get container creation time"
fi

# Check local dist files
echo -e "\n${BLUE}3. Local Build Status${NC}"
if [ -d "dist" ]; then
    DIST_TIMESTAMP=$(stat -c %Y dist/index.html 2>/dev/null || echo "0")
    DIST_TIME=$(date -d "@$DIST_TIMESTAMP" 2>/dev/null || echo "Unknown")
    echo "   Local dist built: $DIST_TIME"
    
    # Check if dist is recent (within last 10 minutes)
    CURRENT_EPOCH=$(date +%s)
    AGE_SECONDS=$((CURRENT_EPOCH - DIST_TIMESTAMP))
    AGE_MINUTES=$((AGE_SECONDS / 60))
    
    if [ $AGE_MINUTES -lt 10 ]; then
        print_status "OK" "Local dist is fresh (${AGE_MINUTES} minutes old)"
    else
        print_status "WARNING" "Local dist is ${AGE_MINUTES} minutes old - run 'npm run build'"
    fi
else
    print_status "ERROR" "No dist directory found - run 'npm run build'"
fi

# Check container files vs local files
echo -e "\n${BLUE}4. Container vs Local Files${NC}"
if [ -f "dist/index.html" ]; then
    LOCAL_HASH=$(md5sum dist/index.html | awk '{print $1}')
    CONTAINER_HASH=$(docker exec ecis-solutions md5sum /usr/share/nginx/html/index.html 2>/dev/null | awk '{print $1}')
    
    if [ "$LOCAL_HASH" = "$CONTAINER_HASH" ]; then
        print_status "OK" "Container has latest files"
    else
        print_status "WARNING" "Container has different files - rebuild needed"
        echo "   Local hash:   $LOCAL_HASH"
        echo "   Container:    $CONTAINER_HASH"
    fi
else
    print_status "ERROR" "Cannot compare - no local index.html"
fi

# Check specific asset files
echo -e "\n${BLUE}5. Asset Files Check${NC}"
LATEST_ASSET=$(ls -t dist/assets/*.js 2>/dev/null | head -1)
if [ -n "$LATEST_ASSET" ]; then
    ASSET_NAME=$(basename "$LATEST_ASSET")
    echo "   Latest asset: $ASSET_NAME"
    
    # Check if this asset exists in container
    if docker exec ecis-solutions test -f "/usr/share/nginx/html/assets/$ASSET_NAME" 2>/dev/null; then
        print_status "OK" "Latest asset found in container"
    else
        print_status "WARNING" "Latest asset not found in container"
    fi
else
    print_status "ERROR" "No asset files found in dist/"
fi

# Check container logs for errors
echo -e "\n${BLUE}6. Container Health${NC}"
RECENT_LOGS=$(docker logs ecis-solutions --tail 10 2>/dev/null)
if echo "$RECENT_LOGS" | grep -q "error\|Error\|ERROR"; then
    print_status "WARNING" "Recent errors found in logs"
    echo "   Recent logs:"
    echo "$RECENT_LOGS" | tail -3 | sed 's/^/   /'
else
    print_status "OK" "No recent errors in logs"
fi

# Summary and recommendations
echo -e "\n${BLUE}📋 Summary & Recommendations${NC}"
echo "=============================================="

# Check if rebuild is needed
if [ "$LOCAL_HASH" != "$CONTAINER_HASH" ] || [ $AGE_MINUTES -gt 60 ]; then
    echo -e "${YELLOW}🔄 RECOMMENDED ACTIONS:${NC}"
    echo "   1. Run: npm run build"
    echo "   2. Run: docker build -t ecis-solutions-ecis-solutions ."
    echo "   3. Run: docker stop ecis-solutions && docker rm ecis-solutions"
    echo "   4. Run: docker run -d --name ecis-solutions -p 3000:80 ecis-solutions-ecis-solutions"
    echo ""
    echo "   Or use the quick rebuild script: ./quick-rebuild.sh"
else
    echo -e "${GREEN}✅ Everything looks good! Your container is using the latest build.${NC}"
fi

echo -e "\n${BLUE}🌐 Your site should be available at: http://localhost:3000${NC}"
