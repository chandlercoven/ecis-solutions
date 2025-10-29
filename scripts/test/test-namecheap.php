<?php
/**
 * ECIS Solutions - Namecheap Email Test Script
 * Tests Namecheap SMTP configuration
 */

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

echo "🔧 ECIS Solutions - Namecheap Email Test\n";
echo "=======================================\n\n";

// Load environment variables
$envFile = __DIR__ . '/../../.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            putenv(trim($key) . '=' . trim($value));
        }
    }
}

// Test email details
$to = getenv('SENDGRID_TO_EMAIL') ?: 'michael@ecissolutions.com';
$firstName = 'Test';
$lastName = 'User';
$email = 'test@example.com';
$phone = '(555) 123-4567';
$service = 'Security Consultation';
$message = 'This is a test email from ECIS Solutions using Namecheap SMTP.';

$subject = "TEST EMAIL - New Contact Form Submission from ECIS Solutions";

$plainBody = "TEST EMAIL - New Contact Form Submission\n" .
    "From: ECIS Solutions Website\n" .
    "Name: $firstName $lastName\n" .
    "Email: $email\n" .
    "Phone: $phone\n" .
    "Service: $service\n" .
    "Message: $message\n" .
    "---\n" .
    "Submitted: " . date('Y-m-d H:i:s') . "\n" .
    "IP Address: 127.0.0.1 (test)\n" .
    "Sent via: Namecheap SMTP\n";

$htmlBody = "<h2>TEST EMAIL - New Contact Form Submission</h2>" .
    "<p><strong>From:</strong> ECIS Solutions Website</p>" .
    "<p><strong>Name:</strong> $firstName $lastName</p>" .
    "<p><strong>Email:</strong> $email</p>" .
    "<p><strong>Phone:</strong> $phone</p>" .
    "<p><strong>Service:</strong> $service</p>" .
    "<p><strong>Message:</strong> $message</p>" .
    "<hr>" .
    "<p><small>Submitted: " . date('Y-m-d H:i:s') . "<br>" .
    "IP Address: 127.0.0.1 (test)<br>" .
    "Sent via: Namecheap SMTP</small></p>";

echo "📧 Attempting to send email via Namecheap SMTP...\n";

try {
    $mailer = new PHPMailer(true);
    $mailer->isSMTP();

    // Namecheap SMTP settings from environment
    $smtpHost = getenv('MAIL_HOST') ?: 'mail.privateemail.com';
    $smtpPort = getenv('MAIL_PORT') ?: 587;
    $smtpSecure = getenv('MAIL_ENCRYPTION') ?: 'tls';
    $smtpUser = getenv('MAIL_USERNAME') ?: '';
    $smtpPass = getenv('MAIL_PASSWORD') ?: '';
    $fromEmail = getenv('MAIL_FROM_ADDRESS') ?: '';
    $fromName = getenv('MAIL_FROM_NAME') ?: 'ECIS Solutions';

    echo "📋 SMTP Configuration:\n";
    echo "   Host: $smtpHost\n";
    echo "   Port: $smtpPort\n";
    echo "   Security: $smtpSecure\n";
    echo "   Username: $smtpUser\n";
    echo "   From: $fromEmail ($fromName)\n";
    echo "   To: $to\n\n";

    if (empty($smtpUser) || empty($smtpPass)) {
        throw new Exception("Namecheap email credentials not configured in .env file");
    }

    $mailer->Host = $smtpHost;
    $mailer->Port = (int)$smtpPort;
    $mailer->SMTPSecure = $smtpSecure;
    $mailer->SMTPAuth = true;
    $mailer->Username = $smtpUser;
    $mailer->Password = $smtpPass;

    // Enable debug output
    $mailer->SMTPDebug = 2; // 0 = off, 1 = client messages, 2 = client and server messages
    $mailer->Debugoutput = function($str, $level) {
        echo "DEBUG: $str";
    };

    // From / To
    $mailer->setFrom($fromEmail, $fromName);
    $mailer->addAddress($to, 'ECIS Solutions');
    $mailer->addReplyTo($email, "$firstName $lastName");

    // Content
    $mailer->isHTML(true);
    $mailer->Subject = $subject;
    $mailer->Body = $htmlBody;
    $mailer->AltBody = $plainBody;

    // Send the email
    $result = $mailer->send();
    
    if ($result) {
        echo "\n✅ SUCCESS: Email sent successfully via Namecheap SMTP!\n";
        echo "📧 Email sent to: $to\n";
        echo "📧 From: $fromEmail ($fromName)\n";
        echo "📧 Subject: $subject\n";
    } else {
        echo "\n❌ FAILED: Email could not be sent\n";
    }

} catch (Exception $e) {
    echo "\n❌ ERROR: " . $e->getMessage() . "\n";
    echo "\n🔧 Troubleshooting Tips:\n";
    echo "1. Check your Namecheap email credentials in .env file\n";
    echo "2. Verify SMTP settings with Namecheap support\n";
    echo "3. Try alternative SMTP settings:\n";
    echo "   - Host: smtp.privateemail.com\n";
    echo "   - Port: 465\n";
    echo "   - Security: ssl\n";
    echo "4. Check if your hosting provider blocks SMTP ports\n";
}

echo "\n📋 Namecheap SMTP Settings Reference:\n";
echo "Primary Settings:\n";
echo "  Host: mail.privateemail.com\n";
echo "  Port: 587\n";
echo "  Security: tls\n\n";
echo "Alternative Settings:\n";
echo "  Host: smtp.privateemail.com\n";
echo "  Port: 465\n";
echo "  Security: ssl\n\n";
echo "📞 Need help? Contact Namecheap support or check their documentation.\n";
?>
