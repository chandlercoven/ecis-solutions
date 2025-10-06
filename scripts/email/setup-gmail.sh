#!/bin/bash

# ECIS Solutions - Gmail SMTP Setup Script
echo "🔧 ECIS Solutions - Gmail SMTP Setup"
echo "===================================="

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}📧 Setting up Gmail SMTP for ECIS Solutions...${NC}"

# Check if .env exists
if [ ! -f ".env" ]; then
    echo -e "${RED}❌ .env file not found!${NC}"
    exit 1
fi

# Backup current .env
echo -e "${YELLOW}📋 Creating backup of current .env...${NC}"
cp .env .env.backup.$(date +%Y%m%d_%H%M%S)

# Create new .env with Gmail template
echo -e "${BLUE}📝 Creating Gmail configuration template...${NC}"

cat > .env.gmail << 'EOF'
# ECIS Solutions Email Configuration
# Gmail SMTP Configuration (Primary)

# Gmail SMTP Settings
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=your-gmail@gmail.com
MAIL_PASSWORD=your_16_character_app_password
MAIL_FROM_ADDRESS=your-gmail@gmail.com
MAIL_FROM_NAME=ECIS Solutions

# Fallback: SendGrid API Configuration
SENDGRID_API_KEY=your_sendgrid_api_key_here
SENDGRID_FROM_EMAIL=michael@ecissolutions.com
SENDGRID_FROM_NAME=ECIS Solutions
SENDGRID_TO_EMAIL=michael@ecissolutions.com

# Security Note: This file should be in .gitignore to prevent committing credentials
# Gmail Setup: Enable 2FA and create App Password at https://myaccount.google.com/
EOF

echo -e "${GREEN}✅ Gmail template created: .env.gmail${NC}"

echo -e "\n${BLUE}📋 Next Steps:${NC}"
echo "1. Go to https://myaccount.google.com/"
echo "2. Security → 2-Step Verification (enable if not already)"
echo "3. Security → App passwords"
echo "4. Select 'Mail' and generate password"
echo "5. Copy the 16-character password"
echo "6. Edit .env.gmail with your Gmail credentials"
echo "7. Replace .env with .env.gmail"
echo "8. Test with: php test-gmail.php"

echo -e "\n${YELLOW}⚠️  Important:${NC}"
echo "- Use App Password (not regular Gmail password)"
echo "- Enable 2-Factor Authentication first"
echo "- Keep credentials secure"

echo -e "\n${BLUE}🧪 Test Commands:${NC}"
echo "php test-gmail.php          # Test Gmail SMTP"
echo "php test-contact.php        # Test contact form"
echo "./deploy-check.sh           # Check deployment"

echo -e "\n${GREEN}🎉 Setup complete! Follow the steps above to configure Gmail.${NC}"
