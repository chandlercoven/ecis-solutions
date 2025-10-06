<?php
// API endpoint to fetch contact form submissions
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// Simple authentication check (you can enhance this)
$authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';
$expectedToken = 'Bearer ecis-team-2024'; // Simple token for now

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check authentication
    if ($authHeader !== $expectedToken) {
        http_response_code(401);
        echo json_encode(['error' => 'Unauthorized']);
        exit;
    }
    
    $logFile = '/var/www/ecis-solutions/contact-submissions.log';
    
    if (!file_exists($logFile)) {
        echo json_encode(['submissions' => []]);
        exit;
    }
    
    $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $submissions = [];
    
    // Parse each line as JSON
    foreach ($lines as $line) {
        $submission = json_decode($line, true);
        if ($submission) {
            $submissions[] = $submission;
        }
    }
    
    // Reverse to show newest first
    $submissions = array_reverse($submissions);
    
    echo json_encode([
        'success' => true,
        'submissions' => $submissions,
        'count' => count($submissions)
    ]);
    
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
?>
