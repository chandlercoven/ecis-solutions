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

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    // User info
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    // Submissions CRUD
    Route::get('/submissions', [SubmissionController::class, 'index']);
    Route::get('/submissions/{submission}', [SubmissionController::class, 'show']);
    Route::put('/submissions/{submission}', [SubmissionController::class, 'update']);
    Route::delete('/submissions/{submission}', [SubmissionController::class, 'destroy']);
});
