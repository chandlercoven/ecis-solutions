<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submissions = Submission::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'success' => true,
            'submissions' => $submissions,
            'count' => $submissions->count()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string'
        ]);

        // Create the submission
        $submission = Submission::create([
            'first_name' => $validated['firstName'],
            'last_name' => $validated['lastName'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service' => $validated['service'] ?? null,
            'message' => $validated['message'] ?? null,
            'status' => 'unread',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent()
        ]);

        // Send email notification via Resend
        try {
            $this->sendEmailNotification($submission);
        } catch (\Exception $e) {
            // Log the error but don't fail the submission
            \Log::error('Failed to send email notification: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Submission received successfully',
            'submission' => $submission
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Submission $submission)
    {
        return response()->json([
            'success' => true,
            'submission' => $submission
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submission $submission)
    {
        $validated = $request->validate([
            'status' => 'sometimes|in:unread,read,replied'
        ]);

        $submission->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Submission updated successfully',
            'submission' => $submission
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submission $submission)
    {
        $submission->delete();

        return response()->json([
            'success' => true,
            'message' => 'Submission deleted successfully'
        ]);
    }

    /**
     * Send email notification via Resend
     */
    private function sendEmailNotification(Submission $submission)
    {
        $to = ['chandlercoven@gmail.com', 'michael@ecissolutions.com'];
        $subject = 'New Contact Form Submission - ECIS Solutions';
        
        $htmlBody = view('emails.submission-notification', [
            'submission' => $submission
        ])->render();
        
        $plainBody = "New contact form submission from ECIS Solutions website:\n\n" .
            "Name: {$submission->first_name} {$submission->last_name}\n" .
            "Email: {$submission->email}\n" .
            "Phone: {$submission->phone}\n" .
            "Service: " . ($submission->service ?: 'Not specified') . "\n" .
            "Message: " . ($submission->message ?: 'No message provided') . "\n\n" .
            "Submitted: {$submission->created_at}\n" .
            "IP Address: {$submission->ip_address}\n";

        // Use Laravel's Mail facade with Resend
        Mail::raw($plainBody, function (Message $message) use ($to, $subject, $submission) {
            $message->from('alerts@chandlercoven.com', 'ECIS Solutions')
                   ->to($to)
                   ->subject($subject)
                   ->replyTo($submission->email, "{$submission->first_name} {$submission->last_name}");
        });
    }
}
