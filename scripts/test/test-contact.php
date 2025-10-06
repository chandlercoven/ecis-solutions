<?php
// Test script for contact form email functionality
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

echo "Testing GoDaddy SMTP email sending...\n";
echo "Environment loaded from .env file\n";

// Test data
$firstName = 'Test';
$lastName = 'User';
$email = 'test@example.com';
$phone = '516-640-8144';
$service = 'Security Assessment';
$message = 'This is a test email to verify SMTP is working properly with GoDaddy Email Essentials.';

$to = 'michael@ecissolutions.com';
$subject = 'TEST: New Contact Form Submission - ECIS Solutions';

$plainBody = "TEST EMAIL - New contact form submission from ECIS Solutions website:\n\n" .
    "Name: $firstName $lastName\n" .
    "Email: $email\n" .
    "Phone: $phone\n" .
    "Service: " . ($service ?: 'Not specified') . "\n" .
    "Message: " . ($message ?: 'No message provided') . "\n\n" .
    "Submitted: " . date('Y-m-d H:i:s') . "\n" .
    "IP Address: 127.0.0.1 (test)\n";

$htmlBody = nl2br(htmlspecialchars($plainBody));

echo "Attempting to send email via GoDaddy SMTP...\n";

try {
    $mailer = new PHPMailer(true);
    $mailer->isSMTP();

    // SMTP settings from environment
    $smtpHost = getenv('MAIL_HOST') ?: 'smtpout.secureserver.net';
    $smtpPort = getenv('MAIL_PORT') ?: 587;
    $smtpSecure = getenv('MAIL_ENCRYPTION') ?: 'tls';
    $smtpUser = getenv('MAIL_USERNAME') ?: 'michael@ecissolutions.com';
    $smtpPass = getenv('MAIL_PASSWORD') ?: '';
    $fromEmail = getenv('MAIL_FROM_ADDRESS') ?: 'michael@ecissolutions.com';
    $fromName = getenv('MAIL_FROM_NAME') ?: 'ECIS Solutions';

    echo "SMTP Host: $smtpHost\n";
    echo "SMTP Port: $smtpPort\n";
    echo "SMTP Secure: $smtpSecure\n";
    echo "SMTP User: $smtpUser\n";
    echo "From: $fromEmail ($fromName)\n";
    echo "To: $to\n";

    $mailer->Host = $smtpHost;
    $mailer->Port = (int)$smtpPort;
    $mailer->SMTPSecure = $smtpSecure;
    $mailer->SMTPAuth = true;
    $mailer->Username = $smtpUser;
    $mailer->Password = $smtpPass;

    // From / To
    $mailer->setFrom($fromEmail, $fromName);
    $mailer->addAddress($to, 'ECIS Solutions');
    $mailer->addReplyTo($email, "$firstName $lastName");

    // Content
    $mailer->isHTML(true);
    $mailer->Subject = $subject;
    $mailer->Body = $htmlBody;
    $mailer->AltBody = $plainBody;

    $mailer->send();
    echo "SUCCESS: Email sent successfully!\n";
    echo "Check michael@ecissolutions.com inbox for the test email.\n";

} catch (Exception $e) {
    echo "ERROR: Mail send failed: " . $e->getMessage() . "\n";
    echo "Full error details:\n";
    echo $e->getTraceAsString() . "\n";
}
?>
