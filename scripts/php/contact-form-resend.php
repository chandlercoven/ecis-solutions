<?php
// Contact form handler using Resend API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

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

// Always log submission locally
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

// Send email via Resend API
$resendApiKey = getenv('RESEND_KEY');
if (!$resendApiKey) {
	error_log('RESEND_KEY not found in environment variables');
	echo json_encode([
		'success' => true,
		'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.'
	]);
	exit;
}

// Prepare email content
$to = ['chandlercoven@gmail.com', 'michael@ecissolutions.com'];
$subject = 'New Contact Form Submission - ECIS Solutions';

$htmlBody = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0077ff; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9f9f9; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #0077ff; }
        .value { margin-top: 5px; }
        .footer { padding: 20px; text-align: center; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>New Contact Form Submission</h1>
            <p>ECIS Solutions Website</p>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Name:</div>
                <div class='value'>$firstName $lastName</div>
            </div>
            <div class='field'>
                <div class='label'>Email:</div>
                <div class='value'><a href='mailto:$email'>$email</a></div>
            </div>
            <div class='field'>
                <div class='label'>Phone:</div>
                <div class='value'><a href='tel:$phone'>$phone</a></div>
            </div>
            <div class='field'>
                <div class='label'>Service:</div>
                <div class='value'>" . ($service ?: 'Not specified') . "</div>
            </div>
            <div class='field'>
                <div class='label'>Message:</div>
                <div class='value'>" . ($message ?: 'No message provided') . "</div>
            </div>
            <div class='field'>
                <div class='label'>Submitted:</div>
                <div class='value'>" . date('Y-m-d H:i:s') . "</div>
            </div>
            <div class='field'>
                <div class='label'>IP Address:</div>
                <div class='value'>" . $_SERVER['REMOTE_ADDR'] . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>This email was sent from the ECIS Solutions contact form.</p>
        </div>
    </div>
</body>
</html>";

$plainBody = "New contact form submission from ECIS Solutions website:\n\n" .
	"Name: $firstName $lastName\n" .
	"Email: $email\n" .
	"Phone: $phone\n" .
	"Service: " . ($service ?: 'Not specified') . "\n" .
	"Message: " . ($message ?: 'No message provided') . "\n\n" .
	"Submitted: " . date('Y-m-d H:i:s') . "\n" .
	"IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Prepare Resend API request
$resendData = [
	'from' => 'ECIS Solutions <alerts@chandlercoven.com>',
	'to' => [$to],
	'subject' => $subject,
	'html' => $htmlBody,
	'text' => $plainBody,
	'reply_to' => $email
];

// Send to Resend API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.resend.com/emails');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($resendData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
	'Authorization: Bearer ' . $resendApiKey,
	'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
	error_log('Resend API error: ' . $error);
	echo json_encode([
		'success' => true,
		'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.'
	]);
	exit;
}

if ($httpCode !== 200) {
	error_log('Resend API HTTP error: ' . $httpCode . ' - ' . $response);
	echo json_encode([
		'success' => true,
		'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.'
	]);
	exit;
}

$responseData = json_decode($response, true);
if (isset($responseData['id'])) {
	error_log('Email sent successfully via Resend. ID: ' . $responseData['id']);
} else {
	error_log('Unexpected Resend response: ' . $response);
}

echo json_encode([
	'success' => true,
	'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.'
]);
?>
