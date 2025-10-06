# Gmail SMTP Setup for ECIS Solutions

## Step 1: Enable Gmail App Passwords

### For Gmail Account Setup:
1. **Go to your Google Account**: https://myaccount.google.com/
2. **Security** → **2-Step Verification** (enable if not already)
3. **Security** → **App passwords**
4. **Select app**: "Mail"
5. **Select device**: "Other (custom name)" → Enter "ECIS Solutions Server"
6. **Generate password**: Copy the 16-character password (e.g., `abcd efgh ijkl mnop`)

## Step 2: Gmail SMTP Settings

```
SMTP Server: smtp.gmail.com
Port: 587 (TLS) or 465 (SSL)
Security: TLS or SSL
Username: your-gmail@gmail.com
Password: [16-character app password from Step 1]
```

## Step 3: Update .env File

Replace your current .env with Gmail settings:

```env
# Gmail SMTP Configuration
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=your-gmail@gmail.com
MAIL_PASSWORD=your_16_character_app_password
MAIL_FROM_ADDRESS=your-gmail@gmail.com
MAIL_FROM_NAME=ECIS Solutions

# Fallback settings
SENDGRID_API_KEY=your_sendgrid_api_key_here
SENDGRID_FROM_EMAIL=michael@ecissolutions.com
SENDGRID_FROM_NAME=ECIS Solutions
SENDGRID_TO_EMAIL=michael@ecissolutions.com
```

## Step 4: Test Configuration

Run the test script to verify Gmail SMTP is working:

```bash
php test-gmail.php
```

## Important Notes:

### Security:
- ✅ Use App Passwords (not your regular Gmail password)
- ✅ Enable 2-Factor Authentication first
- ✅ Keep credentials secure

### Gmail Limits:
- 📧 500 emails/day for free Gmail accounts
- 📧 2000 emails/day for Google Workspace accounts
- ⚠️ Gmail may flag high-volume sending as spam

### Professional Email:
For business use, consider:
- **Google Workspace**: Professional email with your domain
- **SendGrid**: Better for high-volume email sending
- **Mailgun**: Alternative to SendGrid

## Troubleshooting:

### Common Issues:
1. **"Less secure app access"** → Use App Passwords instead
2. **"Authentication failed"** → Check 2FA is enabled and app password is correct
3. **"Connection refused"** → Check firewall/port blocking
4. **"Rate limit exceeded"** → Gmail daily limits reached

### Test Commands:
```bash
# Test Gmail SMTP
php test-gmail.php

# Check email logs
tail -f /var/log/nginx/error.log

# Test contact form
curl -X POST https://www.ecissolutions.com/contact-form-working.php
```
