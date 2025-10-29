<?php
/**
 * Simple Namecheap Email Test
 * Simulates a contact form submission
 */

// Set the request method to POST
$_SERVER['REQUEST_METHOD'] = 'POST';

// Simulate form data
$_POST = [
    'firstName' => 'Test',
    'lastName' => 'User',
    'email' => 'test@example.com',
    'phone' => '(555) 123-4567',
    'service' => 'Security Consultation',
    'message' => 'This is a test email from ECIS Solutions using Namecheap SMTP.'
];

echo "🧪 Testing Namecheap Email with Contact Form...\n";
echo "==============================================\n\n";

// Include the contact form script
include 'scripts/php/contact-form-working.php';
?>
