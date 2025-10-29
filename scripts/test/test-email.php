<?php
// Test script for email functionality
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

// Simulate JSON input
$testData = [
    'firstName' => 'Test',
    'lastName' => 'User', 
    'email' => 'test@example.com',
    'phone' => '561-249-0897',
    'service' => 'Security Assessment',
    'message' => 'This is a test email to verify SMTP is working properly with GoDaddy Email Essentials.'
];

// Set the input stream
$jsonInput = json_encode($testData);
$tempFile = tmpfile();
fwrite($tempFile, $jsonInput);
rewind($tempFile);

// Override php://input
$originalInput = 'php://input';
if (function_exists('stream_wrapper_register')) {
    // This is a simplified approach - in real testing we'd need to mock php://input
    echo "Testing email functionality...\n";
    echo "Test data: " . $jsonInput . "\n\n";
    
    // Include the contact form handler
    ob_start();
    include '/var/www/ecis-solutions/contact-form-working.php';
    $output = ob_get_clean();
    
    echo "Response: " . $output . "\n";
} else {
    echo "Cannot test directly - need to run via web server\n";
}
?>
