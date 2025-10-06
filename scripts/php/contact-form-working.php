<?php
// Working contact form handler with SMTP email sending via PHPMailer
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Autoload Composer dependencies (PHPMailer)
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
$to = 'michael@ecissolutions.com';
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

// If PHPMailer is available, send via GoDaddy SMTP
if (class_exists(PHPMailer::class)) {
	try {
		$mailer = new PHPMailer(true);
		$mailer->isSMTP();

		// SMTP settings from environment
		$smtpHost = getenv('MAIL_HOST') ?: 'smtpout.secureserver.net';
		$smtpPort = getenv('MAIL_PORT') ?: 587; // GoDaddy SMTP commonly 587
		$smtpSecure = getenv('MAIL_ENCRYPTION') ?: 'tls'; // 'tls' or 'ssl'
		$smtpUser = getenv('MAIL_USERNAME') ?: 'michael@ecissolutions.com';
		$smtpPass = getenv('MAIL_PASSWORD') ?: '';
		$fromEmail = getenv('MAIL_FROM_ADDRESS') ?: 'michael@ecissolutions.com';
		$fromName = getenv('MAIL_FROM_NAME') ?: 'ECIS Solutions';

		$mailer->Host = $smtpHost;
		$mailer->Port = (int)$smtpPort;
		$mailer->SMTPSecure = $smtpSecure;
		$mailer->SMTPAuth = true;
		$mailer->Username = $smtpUser;
		$mailer->Password = $smtpPass;

		// From / To
		$mailer->setFrom($fromEmail, $fromName);
		$mailer->addAddress($to, 'ECIS Solutions');
		// Let replies go to the submitter
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$mailer->addReplyTo($email, "$firstName $lastName");
		}

		// Content
		$mailer->isHTML(true);
		$mailer->Subject = $subject;
		$mailer->Body = $htmlBody;
		$mailer->AltBody = $plainBody;

		$mailer->send();

		echo json_encode([
			'success' => true,
			'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.'
		]);
		exit;
	} catch (Exception $e) {
		error_log('Mail send failed: ' . $e->getMessage());
		// Fall through to success response with log-only to avoid exposing errors to users
	}
}

// If PHPMailer isn't available or sending failed, still return success (already logged)
echo json_encode([
	'success' => true,
	'message' => 'Thank you for your message! We\'ll be in touch within 24 hours.'
]);
?>
