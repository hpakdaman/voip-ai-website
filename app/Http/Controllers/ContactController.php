<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact-us');
    }

    public function send(Request $request)
    {
        try {
            // Validation logic
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'subject' => 'required|string',
                'comments' => 'required|string',
            ]);

            // Prepare email data
            $data = $request->only(['name', 'email', 'subject', 'comments']);
            
            // Send email
            Mail::raw('Name: ' . $data['name'] . "\n" . 
                      'Email: ' . $data['email'] . "\n" . 
                      'Subject: ' . $data['subject'] . "\n" . 
                      'Comments: ' . $data['comments'], 
                function ($message) use ($data) {
                    $message->to('your-email@gmail.com') // Replace with your email
                            ->subject($data['subject']);
                }
            );

            // Redirect back with success message
            return redirect()->back()->with('success', 'Thank you ' . $data['name'] . '! Your message has been sent successfully.');
            

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
