# Namecheap Email Setup for ECIS Solutions

## Overview
This guide shows how to configure Namecheap email for sending notifications from your ECIS Solutions application.

## Namecheap Email SMTP Settings

### Primary Settings (Recommended)
```
SMTP Server: mail.privateemail.com
Port: 587
Security: TLS
Username: michael@ecissolutions.com
Password: [your Namecheap email password]
```

### Alternative Settings (If Primary Doesn't Work)
```
SMTP Server: smtp.privateemail.com
Port: 465
Security: SSL
Username: michael@ecissolutions.com
Password: [your Namecheap email password]
```

## Setup Steps

### 1. Get Your Namecheap Email Credentials
1. Log into your Namecheap account
2. Go to **cPanel** → **Email Accounts**
3. Find your email account (`michael@ecissolutions.com`)
4. Note the email password (or reset it if needed)
5. **Important:** Use the email password, not your cPanel password

### 2. Configure Environment Variables
Run the setup script:
```bash
./scripts/email/setup-namecheap.sh
```

This creates a `.env.namecheap` file with the correct configuration template.

### 3. Update Your Credentials
Edit `.env.namecheap` and replace:
- `your_namecheap_email_password` with your actual email password
- Verify the email address is correct

### 4. Activate Configuration
Replace your current `.env` file:
```bash
cp .env.namecheap .env
```

### 5. Test the Configuration
```bash
php scripts/test/test-namecheap.php
```

## Email Types You Can Send

### Contact Form Notifications
- New contact form submissions
- Service inquiries
- Quote requests
- Emergency contacts

### Internal Notifications
- New user registrations
- System alerts
- Daily reports
- Incident notifications

### Client Communications
- Service confirmations
- Appointment reminders
- Status updates
- Invoice notifications

## Integration with Your App

### Contact Form Integration
The contact form at `/contact-form-working.php` will automatically use Namecheap SMTP when configured.

### Laravel Backend Integration
Update your Laravel `.env` file in the `backend/` directory with the same settings.

### Vue.js Frontend Integration
The frontend can trigger email notifications through API calls to your backend.

## Troubleshooting

### Common Issues

#### "Authentication Failed"
- ✅ Check email password (not cPanel password)
- ✅ Verify email address is correct
- ✅ Try alternative SMTP settings

#### "Connection Timeout"
- ✅ Check if your hosting provider blocks SMTP ports
- ✅ Try port 465 with SSL instead of 587 with TLS
- ✅ Contact your hosting provider about SMTP restrictions

#### "Host Not Found"
- ✅ Try `smtp.privateemail.com` instead of `mail.privateemail.com`
- ✅ Check your internet connection
- ✅ Verify Namecheap service status

### Testing Different Configurations

If the primary settings don't work, try these alternatives:

```bash
# Test with alternative SMTP server
MAIL_HOST=smtp.privateemail.com
MAIL_PORT=465
MAIL_ENCRYPTION=ssl
```

### Debug Mode
Enable debug mode in the test script to see detailed connection information:
```php
$mailer->SMTPDebug = 2; // Already enabled in test script
```

## Security Best Practices

### Credential Protection
- ✅ Never commit `.env` files to version control
- ✅ Use strong, unique passwords
- ✅ Regularly rotate email passwords
- ✅ Monitor email account for unauthorized access

### Email Security
- ✅ Use TLS/SSL encryption
- ✅ Validate email addresses before sending
- ✅ Implement rate limiting for contact forms
- ✅ Log all email sending attempts

## Monitoring & Maintenance

### Email Delivery Monitoring
- Check email delivery rates
- Monitor bounce rates
- Track spam complaints
- Review email logs regularly

### Regular Maintenance
- Update passwords quarterly
- Test email functionality monthly
- Monitor Namecheap service status
- Keep backup email service (SendGrid) configured

## Fallback Configuration

Keep SendGrid configured as a fallback:
```env
SENDGRID_API_KEY=your_sendgrid_api_key_here
SENDGRID_FROM_EMAIL=michael@ecissolutions.com
SENDGRID_FROM_NAME=ECIS Solutions
SENDGRID_TO_EMAIL=michael@ecissolutions.com
```

## Support Resources

### Namecheap Support
- **Documentation:** https://www.namecheap.com/support/knowledgebase/
- **Email Support:** https://www.namecheap.com/support/
- **Live Chat:** Available in Namecheap account

### ECIS Solutions Support
- **Technical Issues:** Check server logs
- **Configuration Help:** Review this documentation
- **Emergency Contact:** (561) 249-0897

## Example Email Templates

### Contact Form Notification
```html
<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{name}}</p>
<p><strong>Email:</strong> {{email}}</p>
<p><strong>Phone:</strong> {{phone}}</p>
<p><strong>Service:</strong> {{service}}</p>
<p><strong>Message:</strong> {{message}}</p>
<hr>
<p><small>Submitted: {{timestamp}}<br>
IP Address: {{ip_address}}</small></p>
```

### System Alert
```html
<h2>ECIS Solutions - System Alert</h2>
<p><strong>Alert Type:</strong> {{alert_type}}</p>
<p><strong>Message:</strong> {{message}}</p>
<p><strong>Timestamp:</strong> {{timestamp}}</p>
<p><strong>Severity:</strong> {{severity}}</p>
```

This configuration will allow your ECIS Solutions application to send professional email notifications using your Namecheap email account.
