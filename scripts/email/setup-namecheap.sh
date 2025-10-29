#!/bin/bash

# ECIS Solutions - Namecheap Email Setup Script
echo "🔧 ECIS Solutions - Namecheap Email Setup"
echo "========================================="

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}📧 Setting up Namecheap Email for ECIS Solutions...${NC}"

# Check if .env exists
if [ ! -f ".env" ]; then
    echo -e "${RED}❌ .env file not found!${NC}"
    exit 1
fi

# Backup current .env
echo -e "${YELLOW}📋 Creating backup of current .env...${NC}"
cp .env .env.backup.$(date +%Y%m%d_%H%M%S)

# Create new .env with Namecheap template
echo -e "${BLUE}📝 Creating Namecheap configuration template...${NC}"

cat > .env.namecheap << 'EOF'
# ECIS Solutions Email Configuration
# Namecheap Email SMTP Configuration (Primary)

# Namecheap SMTP Settings
MAIL_HOST=mail.privateemail.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=michael@ecissolutions.com
MAIL_PASSWORD=ecis2025!
MAIL_FROM_ADDRESS=michael@ecissolutions.com
MAIL_FROM_NAME=ECIS Solutions

# Alternative Namecheap SMTP Settings (if primary doesn't work)
# MAIL_HOST=smtp.privateemail.com
# MAIL_PORT=465
# MAIL_ENCRYPTION=ssl

# Fallback: SendGrid API Configuration
SENDGRID_API_KEY=your_sendgrid_api_key_here
SENDGRID_FROM_EMAIL=michael@ecissolutions.com
SENDGRID_FROM_NAME=ECIS Solutions
SENDGRID_TO_EMAIL=michael@ecissolutions.com

# Security Note: This file should be in .gitignore to prevent committing credentials
# Namecheap Setup: Use your Namecheap email credentials from cPanel
EOF

echo -e "${GREEN}✅ Namecheap template created: .env.namecheap${NC}"

echo -e "\n${BLUE}📋 Next Steps:${NC}"
echo "1. Log into your Namecheap cPanel"
echo "2. Go to Email Accounts section"
echo "3. Find your email account (michael@ecissolutions.com)"
echo "4. Note the email password (or reset it if needed)"
echo "5. Edit .env.namecheap with your Namecheap email credentials"
echo "6. Replace .env with .env.namecheap"
echo "7. Test with: php scripts/test/test-namecheap.php"

echo -e "\n${YELLOW}⚠️  Important:${NC}"
echo "- Use your Namecheap email password (not cPanel password)"
echo "- If mail.privateemail.com doesn't work, try smtp.privateemail.com"
echo "- Port 587 with TLS is preferred, but 465 with SSL is alternative"
echo "- Keep credentials secure"

echo -e "\n${BLUE}📧 Namecheap SMTP Settings:${NC}"
echo "Primary:"
echo "  Host: mail.privateemail.com"
echo "  Port: 587"
echo "  Security: tls"
echo ""
echo "Alternative:"
echo "  Host: smtp.privateemail.com"
echo "  Port: 465"
echo "  Security: ssl"

echo -e "\n${GREEN}✅ Setup complete! Edit .env.namecheap with your credentials.${NC}"
