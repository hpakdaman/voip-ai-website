<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact-us');
    }

    public function send(Request $request)
    {
        try {
            // Enhanced validation logic
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
                'company' => 'nullable|string|max:255',
                'industry' => 'nullable|string|max:255',
                'subject' => 'required|string|max:255',
                'business_size' => 'nullable|string|max:255',
                'comments' => 'required|string|max:2000',
            ]);

            // Save to database
            $submission = ContactSubmission::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'] ?? null,
                'company' => $validatedData['company'] ?? null,
                'industry' => $validatedData['industry'] ?? null,
                'subject' => $validatedData['subject'],
                'business_size' => $validatedData['business_size'] ?? null,
                'comments' => $validatedData['comments'],
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            // Send email notification (optional)
            try {
                $emailData = [
                    'submission' => $submission,
                    'submitted_at' => $submission->created_at->format('M d, Y - g:i A'),
                ];

                Mail::send('emails.contact-submission', $emailData, function ($message) use ($submission) {
                    $message->to(config('mail.admin_email', 'admin@sawtic.com'))
                            ->subject('New Contact Form Submission - ' . $submission->subject);
                });
            } catch (\Exception $emailError) {
                Log::warning('Contact form email failed to send: ' . $emailError->getMessage());
                // Don't fail the whole process if email fails
            }

            // Redirect back with success message
            return redirect()->back()->with('success', 'Thank you ' . $submission->name . '! Your message has been received. We\'ll get back to you within 24 hours.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Something went wrong. Please try again later.')
                ->withInput();
        }
    }
}
