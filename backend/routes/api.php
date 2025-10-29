<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;

// Health check endpoint
Route::get('/health', function () {
    return response()->json([
        'status' => 'healthy',
        'timestamp' => now(),
        'service' => 'ECIS Solutions API'
    ]);
});

// Real-time submission stream (Server-Sent Events)
Route::get('/submissions/stream', function (Request $request) {
    $response = response()->stream(function () {
        $lastCheck = time();
        $logFile = '/var/www/ecis-solutions/contact-submissions.log';
        
        while (true) {
            // Check if log file has been modified
            if (file_exists($logFile)) {
                $currentModTime = filemtime($logFile);
                
                if ($currentModTime > $lastCheck) {
                    // File has been modified, send update
                    $data = [
                        'type' => 'new_submission',
                        'timestamp' => date('Y-m-d H:i:s'),
                        'message' => 'New submission received'
                    ];
                    
                    echo "data: " . json_encode($data) . "\n\n";
                    ob_flush();
                    flush();
                    
                    $lastCheck = $currentModTime;
                }
            }
            
            // Sleep for 2 seconds before next check
            sleep(2);
        }
    });
    
    $response->headers->set('Content-Type', 'text/event-stream');
    $response->headers->set('Cache-Control', 'no-cache');
    $response->headers->set('Connection', 'keep-alive');
    $response->headers->set('Access-Control-Allow-Origin', '*');
    $response->headers->set('Access-Control-Allow-Headers', 'Cache-Control');
    
    return $response;
});

// Public submission endpoint (for contact form)
Route::post('/submissions', [SubmissionController::class, 'store']);

// Authentication routes
Route::post('/auth/login', function (Request $request) {
    // Simple authentication for team members
    $email = $request->input('email');
    $password = $request->input('password');
    
    $teamUsers = [
        [
            'id' => 1,
            'name' => 'Michael',
            'email' => 'michael@ecissolutions.com',
            'role' => 'admin',
            'department' => 'Management',
            'phone' => '(561) 249-0897'
        ],
        [
            'id' => 2,
            'name' => 'Joey',
            'email' => 'joey@ecissolutions.com',
            'role' => 'manager',
            'department' => 'Operations',
            'phone' => '(561) 249-0897'
        ],
        [
            'id' => 3,
            'name' => 'Chandler',
            'email' => 'chandler@ecissolutions.com',
            'role' => 'dispatcher',
            'department' => 'Dispatch',
            'phone' => '(561) 249-0897'
        ]
    ];
    
    $user = collect($teamUsers)->firstWhere('email', $email);
    
    if ($user && $password === 'ecis2024') {
        $token = 'auth_token_' . time();
        
        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => $user
        ]);
    }
    
    return response()->json([
        'success' => false,
        'error' => 'Invalid credentials'
    ], 401);
});

// Protected routes - using simple token authentication
Route::get('/submissions', function (Request $request) {
    $token = $request->bearerToken();
    
    // Debug logging
    error_log('API Debug: Received token: ' . ($token ? $token : 'NO TOKEN'));
    error_log('API Debug: Authorization header: ' . $request->header('Authorization'));
    
    if (!$token || !str_starts_with($token, 'auth_token_')) {
        error_log('API Debug: Token validation failed - token: ' . ($token ? $token : 'NULL'));
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    
    // For now, return mock data since we don't have a database setup
    $submissions = [
        [
            'id' => 1,
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'phone' => '(555) 123-4567',
            'service' => 'Security Consultation',
            'message' => 'Interested in security services for our office building.',
            'status' => 'unread',
            'timestamp' => now()->subHours(2)->toISOString(),
            'updated_by' => null,
            'updated_at' => null
        ],
        [
            'id' => 2,
            'name' => 'Sarah Johnson',
            'email' => 'sarah@company.com',
            'phone' => '(555) 987-6543',
            'service' => 'Patrol Services',
            'message' => 'Need regular patrol services for our warehouse.',
            'status' => 'read',
            'timestamp' => now()->subHours(4)->toISOString(),
            'updated_by' => 'Michael',
            'updated_at' => now()->subHours(3)->toISOString()
        ],
        [
            'id' => 3,
            'name' => 'Mike Wilson',
            'email' => 'mike@business.org',
            'phone' => '(555) 456-7890',
            'service' => 'Emergency Response',
            'message' => 'Looking for 24/7 emergency response services.',
            'status' => 'unread',
            'timestamp' => now()->subHours(6)->toISOString(),
            'updated_by' => null,
            'updated_at' => null
        ]
    ];
    
    return response()->json([
        'success' => true,
        'submissions' => $submissions,
        'count' => count($submissions)
    ]);
});

// Update submission status
Route::patch('/submissions/{id}/status', function (Request $request, $id) {
    $token = $request->bearerToken();
    error_log('API Debug: Update status request for ID: ' . $id);
    error_log('API Debug: Received token: ' . ($token ? $token : 'NO TOKEN'));
    
    if (!$token || !str_starts_with($token, 'auth_token_')) {
        error_log('API Debug: Token validation failed - token: ' . ($token ? $token : 'NULL'));
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    
    $status = $request->input('status');
    $updatedBy = $request->input('updated_by');
    
    error_log('API Debug: Updating submission ' . $id . ' to status: ' . $status . ' by: ' . $updatedBy);
    
    // For now, just return success since we're using mock data
    // In a real app, this would update the database
    return response()->json([
        'success' => true,
        'message' => 'Status updated successfully',
        'submission_id' => $id,
        'status' => $status,
        'updated_by' => $updatedBy,
        'updated_at' => now()->toISOString()
    ]);
});

Route::get('/user', function (Request $request) {
    $token = $request->bearerToken();
    
    if (!$token || !str_starts_with($token, 'auth_token_')) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    
    return response()->json([
        'id' => 1,
        'name' => 'Michael',
        'email' => 'michael@ecissolutions.com',
        'role' => 'admin'
    ]);
});
