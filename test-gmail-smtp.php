<?php
/**
 * Test Gmail SMTP for ECIS Solutions
 * Gmail might work even when Namecheap SMTP is blocked
 */

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

echo "🧪 Testing Gmail SMTP for ECIS Solutions\n";
echo "======================================\n\n";

// Test email details
$to = 'chandlercoven@gmail.com';
$subject = "TEST - Gmail SMTP from ECIS Solutions";

$htmlBody = "<h2>Gmail SMTP Test</h2>" .
    "<p>This is a test email sent from ECIS Solutions using Gmail SMTP.</p>" .
    "<p><strong>Test Details:</strong></p>" .
    "<ul>" .
    "<li>From: ECIS Solutions</li>" .
    "<li>To: chandlercoven@gmail.com</li>" .
    "<li>Time: " . date('Y-m-d H:i:s') . "</li>" .
    "<li>SMTP: Gmail</li>" .
    "</ul>" .
    "<hr>" .
    "<p><small>This is an automated test email.</small></p>";

$plainBody = "Gmail SMTP Test\n\n" .
    "This is a test email sent from ECIS Solutions using Gmail SMTP.\n\n" .
    "Test Details:\n" .
    "- From: ECIS Solutions\n" .
    "- To: chandlercoven@gmail.com\n" .
    "- Time: " . date('Y-m-d H:i:s') . "\n" .
    "- SMTP: Gmail\n\n" .
    "This is an automated test email.";

echo "📧 Testing Gmail SMTP...\n";
echo "⚠️  Note: You'll need to set up Gmail App Password first!\n\n";

// Gmail SMTP settings
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpSecure = 'tls';
$smtpUser = 'chandlercoven@gmail.com'; // You'll need to update this
$smtpPass = 'your_gmail_app_password'; // You'll need to set this
$fromEmail = 'chandlercoven@gmail.com';
$fromName = 'ECIS Solutions';

echo "📋 Gmail Configuration:\n";
echo "   Host: $smtpHost\n";
echo "   Port: $smtpPort\n";
echo "   Security: $smtpSecure\n";
echo "   Username: $smtpUser\n";
echo "   From: $fromEmail\n";
echo "   To: $to\n\n";

if ($smtpPass === 'your_gmail_app_password') {
    echo "❌ Please set up Gmail App Password first:\n";
    echo "1. Go to: https://myaccount.google.com/\n";
    echo "2. Security → 2-Step Verification (enable if not already)\n";
    echo "3. Security → App passwords\n";
    echo "4. Select 'Mail' and generate password\n";
    echo "5. Update \$smtpPass in this script with the 16-character password\n\n";
    exit;
}

try {
    $mailer = new PHPMailer(true);
    $mailer->isSMTP();

    $mailer->Host = $smtpHost;
    $mailer->Port = $smtpPort;
    $mailer->SMTPSecure = $smtpSecure;
    $mailer->SMTPAuth = true;
    $mailer->Username = $smtpUser;
    $mailer->Password = $smtpPass;

    // Enable debug output
    $mailer->SMTPDebug = 2;
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
        echo "\n✅ SUCCESS: Gmail SMTP works!\n";
        echo "📧 Check chandlercoven@gmail.com for the test email\n";
        echo "🔧 You can now use Gmail SMTP for your ECIS Solutions app\n";
    } else {
        echo "\n❌ FAILED: Gmail SMTP could not send email\n";
    }

} catch (Exception $e) {
    echo "\n❌ ERROR: " . $e->getMessage() . "\n";
    echo "\n🔧 Troubleshooting:\n";
    echo "1. Make sure 2-Factor Authentication is enabled on Gmail\n";
    echo "2. Use App Password (not regular Gmail password)\n";
    echo "3. Check if your hosting provider blocks Gmail SMTP too\n";
}

echo "\n📋 Next Steps:\n";
echo "1. Set up Gmail App Password\n";
echo "2. Update this script with your credentials\n";
echo "3. Test Gmail SMTP\n";
echo "4. If it works, update your .env file to use Gmail\n";
?>
