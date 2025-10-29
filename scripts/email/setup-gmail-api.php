<?php
/**
 * Gmail API Setup for ECIS Solutions
 * Alternative to SMTP when ports are blocked
 */

echo "🔧 Gmail API Setup for ECIS Solutions\n";
echo "====================================\n\n";

echo "📋 Gmail API Setup Steps:\n\n";

echo "1. 📧 Create Gmail App Password:\n";
echo "   - Go to: https://myaccount.google.com/\n";
echo "   - Security → 2-Step Verification (enable if not already)\n";
echo "   - Security → App passwords\n";
echo "   - Select 'Mail' and generate password\n";
echo "   - Copy the 16-character password\n\n";

echo "2. 🔧 Configure Gmail SMTP (Alternative to API):\n";
echo "   - Host: smtp.gmail.com\n";
echo "   - Port: 587 (TLS) or 465 (SSL)\n";
echo "   - Username: chandlercoven@gmail.com\n";
echo "   - Password: [16-character app password]\n\n";

echo "3. 🧪 Test Configuration:\n";
echo "   - Run: php scripts/test/test-gmail-api.php\n\n";

echo "4. 📝 Update .env file:\n";
echo "   MAIL_HOST=smtp.gmail.com\n";
echo "   MAIL_PORT=587\n";
echo "   MAIL_ENCRYPTION=tls\n";
echo "   MAIL_USERNAME=chandlercoven@gmail.com\n";
echo "   MAIL_PASSWORD=[your_16_character_app_password]\n";
echo "   MAIL_FROM_ADDRESS=chandlercoven@gmail.com\n";
echo "   MAIL_FROM_NAME=ECIS Solutions\n\n";

echo "✅ Gmail API/SMTP is the most reliable option when hosting blocks SMTP ports.\n";
echo "📧 Gmail allows 500 emails/day for free accounts, 2000/day for Google Workspace.\n";
?>
