<?php
/**
 * Direct Namecheap Email Test
 * Tests Namecheap SMTP without headers
 */

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

echo "🧪 Direct Namecheap Email Test\n";
echo "=============================\n\n";

// Load environment variables
$envFile = '.env';
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
$to = 'chandlercoven@gmail.com';
$subject = "TEST - Namecheap Email from ECIS Solutions";

$htmlBody = "<h2>Namecheap Email Test</h2>" .
    "<p>This is a test email sent from ECIS Solutions using Namecheap SMTP.</p>" .
    "<p><strong>Test Details:</strong></p>" .
    "<ul>" .
    "<li>From: ECIS Solutions</li>" .
    "<li>To: chandlercoven@gmail.com</li>" .
    "<li>Time: " . date('Y-m-d H:i:s') . "</li>" .
    "<li>SMTP: Namecheap</li>" .
    "</ul>" .
    "<hr>" .
    "<p><small>This is an automated test email.</small></p>";

$plainBody = "Namecheap Email Test\n\n" .
    "This is a test email sent from ECIS Solutions using Namecheap SMTP.\n\n" .
    "Test Details:\n" .
    "- From: ECIS Solutions\n" .
    "- To: chandlercoven@gmail.com\n" .
    "- Time: " . date('Y-m-d H:i:s') . "\n" .
    "- SMTP: Namecheap\n\n" .
    "This is an automated test email.";

echo "📧 Sending test email...\n";

try {
    $mailer = new PHPMailer(true);
    $mailer->isSMTP();

    // Namecheap SMTP settings
    $smtpHost = getenv('MAIL_HOST') ?: 'mail.privateemail.com';
    $smtpPort = getenv('MAIL_PORT') ?: 587;
    $smtpSecure = getenv('MAIL_ENCRYPTION') ?: 'tls';
    $smtpUser = getenv('MAIL_USERNAME') ?: 'michael@ecissolutions.com';
    $smtpPass = getenv('MAIL_PASSWORD') ?: 'ecis2025!';
    $fromEmail = getenv('MAIL_FROM_ADDRESS') ?: 'michael@ecissolutions.com';
    $fromName = getenv('MAIL_FROM_NAME') ?: 'ECIS Solutions';

    echo "📋 Configuration:\n";
    echo "   Host: $smtpHost\n";
    echo "   Port: $smtpPort\n";
    echo "   Security: $smtpSecure\n";
    echo "   Username: $smtpUser\n";
    echo "   From: $fromEmail\n";
    echo "   To: $to\n\n";

    $mailer->Host = $smtpHost;
    $mailer->Port = (int)$smtpPort;
    $mailer->SMTPSecure = $smtpSecure;
    $mailer->SMTPAuth = true;
    $mailer->Username = $smtpUser;
    $mailer->Password = $smtpPass;

    // Enable debug output
    $mailer->SMTPDebug = 2; // Show client and server messages
    $mailer->Debugoutput = function($str, $level) {
        echo "DEBUG: $str";
    };

    // From / To
    $mailer->setFrom($fromEmail, $fromName);
    $mailer->addAddress($to, 'ECIS Solutions');

    // Content
    $mailer->isHTML(true);
    $mailer->Subject = $subject;
    $mailer->Body = $htmlBody;
    $mailer->AltBody = $plainBody;

    // Send the email
    $result = $mailer->send();
    
    if ($result) {
        echo "\n✅ SUCCESS: Email sent successfully!\n";
        echo "📧 Check chandlercoven@gmail.com for the test email\n";
    } else {
        echo "\n❌ FAILED: Email could not be sent\n";
    }

} catch (Exception $e) {
    echo "\n❌ ERROR: " . $e->getMessage() . "\n";
    echo "\n🔧 Troubleshooting:\n";
    echo "1. Check your Namecheap email password\n";
    echo "2. Verify SMTP settings with Namecheap\n";
    echo "3. Try alternative settings (smtp.privateemail.com:465 with SSL)\n";
}

echo "\n📋 Current .env configuration:\n";
echo file_get_contents('.env');
?>
