# Resend Email Setup for ECIS Solutions

This document explains how to set up Resend for email notifications in the ECIS Solutions application.

## Overview

Resend is now configured as the primary email service for sending contact form notifications and other automated emails. The system supports both direct API calls and Laravel's built-in mail system.

## Setup Instructions

### 1. Get Resend API Key

1. Sign up for a Resend account at [resend.com](https://resend.com)
2. Verify your domain (ecissolutions.com)
3. Generate an API key from the Resend dashboard

### 2. Configure Environment Variables

Add the following to your `.env` file:

```bash
# Resend Configuration
RESEND_KEY=re_your_api_key_here

# Mail Configuration (for Laravel)
MAIL_MAILER=resend
MAIL_FROM_ADDRESS=noreply@ecissolutions.com
MAIL_FROM_NAME="ECIS Solutions"
```

### 3. Domain Verification

Ensure your domain is verified in Resend:
- Add DNS records as required by Resend
- Verify the domain status in the Resend dashboard

## Implementation Details

### Contact Form Handler

The contact form now uses Resend for sending email notifications:

- **File**: `scripts/php/contact-form-resend.php`
- **Features**: 
  - HTML email templates
  - Reply-to functionality
  - Error handling and logging
  - Local submission logging

### Laravel Backend Integration

The Laravel backend is configured to use Resend:

- **Mail Driver**: `resend` (configured in `config/mail.php`)
- **Service Config**: `config/services.php` contains Resend API key
- **Controller**: `SubmissionController` sends emails via Laravel Mail facade
- **Template**: `resources/views/emails/submission-notification.blade.php`

## Testing

### Test Resend API Directly

```bash
php scripts/test/test-resend-simple.php
```

### Test Contact Form

```bash
php scripts/test/test-resend.php
```

### Test Laravel Backend

```bash
# Test the API endpoint
curl -X POST http://localhost/api/submissions \
  -H "Content-Type: application/json" \
  -d '{
    "firstName": "Test",
    "lastName": "User",
    "email": "test@example.com",
    "phone": "561-249-0897",
    "service": "Commercial Security",
    "message": "Test message"
  }'
```

## Email Templates

### Contact Form Notification

- **Template**: `scripts/php/contact-form-resend.php`
- **Features**: Professional HTML design with ECIS branding
- **Recipients**: michael@ecissolutions.com
- **Reply-to**: Customer's email address

### Laravel Submission Notification

- **Template**: `resources/views/emails/submission-notification.blade.php`
- **Features**: Blade template with submission details
- **Styling**: Professional design with ECIS colors

## Troubleshooting

### Common Issues

1. **API Key Not Found**
   - Ensure `RESEND_KEY` is set in environment variables
   - Check `.env` file is loaded properly

2. **Domain Not Verified**
   - Verify domain in Resend dashboard
   - Check DNS records are correct

3. **Email Not Sending**
   - Check Resend API logs
   - Verify API key permissions
   - Check Laravel logs for errors

### Debug Commands

```bash
# Check environment variables
php -r "echo getenv('RESEND_KEY') ? 'Found' : 'Not found';"

# Test Resend API
php scripts/test/test-resend-simple.php

# Check Laravel mail configuration
php artisan config:show mail
```

## Migration from SMTP

The system has been updated to use Resend instead of SMTP:

1. **Old System**: PHPMailer with GoDaddy SMTP
2. **New System**: Resend API with Laravel Mail
3. **Benefits**: 
   - Better deliverability
   - Professional email templates
   - Better error handling
   - Domain verification

## Security Notes

- API keys are stored in environment variables
- Email content is sanitized before sending
- IP addresses are logged for security
- Reply-to addresses are validated

## Support

For issues with Resend integration:
1. Check Resend dashboard for delivery status
2. Review application logs
3. Test with the provided test scripts
4. Verify domain and API key configuration
