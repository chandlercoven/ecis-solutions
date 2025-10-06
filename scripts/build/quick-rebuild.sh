#!/bin/bash

# ECIS Solutions - Quick Rebuild Script
# This script rebuilds and redeploys your application

echo "🚀 ECIS Solutions - Quick Rebuild"
echo "=================================="

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_step() {
    echo -e "${BLUE}📦 $1${NC}"
}

print_success() {
    echo -e "${GREEN}✅ $1${NC}"
}

print_error() {
    echo -e "${RED}❌ $1${NC}"
}

# Step 1: Build the application
print_step "Building application..."
if npm run build; then
    print_success "Build completed successfully"
else
    print_error "Build failed"
    exit 1
fi

# Step 2: Build Docker image
print_step "Building Docker image..."
if docker build -t ecis-solutions-ecis-solutions .; then
    print_success "Docker image built successfully"
else
    print_error "Docker build failed"
    exit 1
fi

# Step 3: Stop and remove old container
print_step "Stopping old container..."
if docker ps | grep -q "ecis-solutions"; then
    docker stop ecis-solutions
    docker rm ecis-solutions
    print_success "Old container removed"
else
    print_success "No old container to remove"
fi

# Step 4: Start new container
print_step "Starting new container..."
if docker run -d --name ecis-solutions --network proxy-network -p 3000:80 ecis-solutions-ecis-solutions; then
    print_success "New container started successfully"
else
    print_error "Failed to start new container"
    exit 1
fi

# Step 5: Verify deployment
print_step "Verifying deployment..."
sleep 2

if docker ps | grep -q "ecis-solutions"; then
    print_success "Container is running"
    
    # Check if files are latest
    LATEST_ASSET=$(ls -t dist/assets/*.js 2>/dev/null | head -1)
    if [ -n "$LATEST_ASSET" ]; then
        ASSET_NAME=$(basename "$LATEST_ASSET")
        if docker exec ecis-solutions test -f "/usr/share/nginx/html/assets/$ASSET_NAME" 2>/dev/null; then
            print_success "Latest files deployed successfully"
        else
            print_error "Latest files not found in container"
        fi
    fi
else
    print_error "Container is not running"
    exit 1
fi

echo ""
echo -e "${GREEN}🎉 Deployment completed successfully!${NC}"
echo -e "${BLUE}🌐 Your site is available at: http://localhost:3000${NC}"
echo ""
echo "To check deployment status, run: ./deploy-check.sh"
