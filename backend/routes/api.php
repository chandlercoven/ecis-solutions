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
