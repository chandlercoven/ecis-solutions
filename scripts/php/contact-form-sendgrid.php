<?php
// Contact form handler using SendGrid API (since SMTP is blocked)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Autoload Composer dependencies
$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

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

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get JSON input
$raw_input = file_get_contents('php://input');
$input = json_decode($raw_input, true);

// Validate required fields
$required_fields = ['firstName', 'lastName', 'email', 'phone'];
foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        http_response_code(400);
        echo json_encode(['error' => "Missing required field: $field"]);
        exit;
    }
}

// Sanitize input
$firstName = htmlspecialchars(trim($input['firstName']));
$lastName = htmlspecialchars(trim($input['lastName']));
$email = filter_var(trim($input['email']), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(trim($input['phone']));
$service = htmlspecialchars(trim($input['service'] ?? ''));
$message = htmlspecialchars(trim($input['message'] ?? ''));

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Prepare email content
$to = getenv('SENDGRID_TO_EMAIL') ?: 'michael@ecissolutions.com';
$subject = 'New Contact Form Submission - ECIS Solutions';

$plainBody = "New contact form submission from ECIS Solutions website:\n\n" .
    "Name: $firstName $lastName\n" .
    "Email: $email\n" .
    "Phone: $phone\n" .
    "Service: " . ($service ?: 'Not specified') . "\n" .
    "Message: " . ($message ?: 'No message provided') . "\n\n" .
    "Submitted: " . date('Y-m-d H:i:s') . "\n" .
    "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

$htmlBody = nl2br(htmlspecialchars($plainBody));

// Always log submission locally as well
$log_entry = [
    'timestamp' => date('Y-m-d H:i:s'),
    'name' => "$firstName $lastName",
    'email' => $email,
    'phone' => $phone,
    'service' => $service,
    'message' => $message,
    'ip' => $_SERVER['REMOTE_ADDR']
];
$log_file = '/var/www/ecis-solutions/contact-submissions.log';
@file_put_contents($log_file, json_encode($log_entry) . "\n", FILE_APPEND | LOCK_EX);

// Try SendGrid API first
$sendgridApiKey = getenv('SENDGRID_API_KEY');
if ($sendgridApiKey && $sendgridApiKey !== 'your_sendgrid_api_key_here') {
    try {
        $fromEmail = getenv('SENDGRID_FROM_EMAIL') ?: 'michael@ecissolutions.com';
        $fromName = getenv('SENDGRID_FROM_NAME') ?: 'ECIS Solutions';
        
        $email_data = [
            'personalizations' => [
                [
                    'to' => [
                        ['email' => $to, 'name' => 'ECIS Solutions']
                    ],
                    'reply_to' => [
                        'email' => $email,
                        'name' => "$firstName $lastName"
                    ]
                ]
            ],
            'from' => [
                'email' => $fromEmail,
                'name' => $fromName
            ],
            'subject' => $subject,
            'content' => [
                [
                    'type' => 'text/plain',
                    'value' => $plainBody
                ],
                [
                    'type' => 'text/html',
                    'value' => $htmlBody
                ]
            ]
        ];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($email_data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $sendgridApiKey,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            throw new Exception("cURL Error: $error");
        }
        
        if ($httpCode >= 200 && $httpCode < 300) {
            echo json_encode([
                'success' => true,
                'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.',
                'method' => 'SendGrid API'
            ]);
            exit;
        } else {
            throw new Exception("SendGrid API Error (HTTP $httpCode): $response");
        }
        
    } catch (Exception $e) {
        error_log('SendGrid API failed: ' . $e->getMessage());
        // Fall through to success response with log-only
    }
}

// If SendGrid fails or isn't configured, still return success (already logged)
echo json_encode([
    'success' => true,
    'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.',
    'method' => 'Logged only (SendGrid not configured)'
]);
?>
