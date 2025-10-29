<?php
// Test script for Gmail SMTP email functionality
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load environment variables from .env file
function loadEnv($path) {
    if (!file_exists($path)) return;
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Skip comments
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $_ENV[trim($name)] = trim($value);
            putenv(trim($name) . '=' . trim($value));
        }
    }
}

// Load .env file
loadEnv(__DIR__ . '/.env');

echo "🔧 Testing Gmail SMTP email sending...\n";
echo "=====================================\n";

// Test data
$firstName = 'Test';
$lastName = 'User';
$email = 'test@example.com';
$phone = '561-249-0897';
$service = 'Security Assessment';
$message = 'This is a test email to verify Gmail SMTP is working properly for ECIS Solutions contact forms.';

$to = 'michael@ecissolutions.com';
$subject = 'TEST: New Contact Form Submission - ECIS Solutions (Gmail SMTP)';

$plainBody = "TEST EMAIL - New contact form submission from ECIS Solutions website:\n\n" .
    "Name: $firstName $lastName\n" .
    "Email: $email\n" .
    "Phone: $phone\n" .
    "Service: " . ($service ?: 'Not specified') . "\n" .
    "Message: " . ($message ?: 'No message provided') . "\n\n" .
    "Submitted: " . date('Y-m-d H:i:s') . "\n" .
    "IP Address: 127.0.0.1 (test)\n" .
    "Sent via: Gmail SMTP\n";

$htmlBody = "<h2>TEST EMAIL - New Contact Form Submission</h2>" .
    "<p><strong>From:</strong> ECIS Solutions Website</p>" .
    "<p><strong>Name:</strong> $firstName $lastName</p>" .
    "<p><strong>Email:</strong> $email</p>" .
    "<p><strong>Phone:</strong> $phone</p>" .
    "<p><strong>Service:</strong> " . ($service ?: 'Not specified') . "</p>" .
    "<p><strong>Message:</strong> " . ($message ?: 'No message provided') . "</p>" .
    "<hr>" .
    "<p><small>Submitted: " . date('Y-m-d H:i:s') . "<br>" .
    "IP Address: 127.0.0.1 (test)<br>" .
    "Sent via: Gmail SMTP</small></p>";

echo "📧 Attempting to send email via Gmail SMTP...\n";

try {
    $mailer = new PHPMailer(true);
    $mailer->isSMTP();

    // Gmail SMTP settings from environment
    $smtpHost = getenv('MAIL_HOST') ?: 'smtp.gmail.com';
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
    echo "   To: $to\n";

    if (empty($smtpUser) || empty($smtpPass)) {
        throw new Exception("Gmail credentials not configured in .env file");
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

    echo "\n🚀 Sending email...\n";
    $mailer->send();
    
    echo "\n✅ SUCCESS: Email sent successfully!\n";
    echo "📬 Check $to inbox for the test email.\n";
    echo "📧 Email sent via Gmail SMTP from $fromEmail\n";

} catch (Exception $e) {
    echo "\n❌ ERROR: Mail send failed: " . $e->getMessage() . "\n";
    echo "\n🔧 Troubleshooting tips:\n";
    echo "   1. Check Gmail credentials in .env file\n";
    echo "   2. Ensure 2-Factor Authentication is enabled\n";
    echo "   3. Use App Password (not regular Gmail password)\n";
    echo "   4. Check firewall/port blocking\n";
    echo "\n📋 Full error details:\n";
    echo $e->getTraceAsString() . "\n";
}

echo "\n📝 Next steps:\n";
echo "   1. Update .env file with your Gmail credentials\n";
echo "   2. Run this test again: php test-gmail.php\n";
echo "   3. Test contact form on website\n";
?>
