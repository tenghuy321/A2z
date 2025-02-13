<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'message_form' => 'required|string|max:255',
        ]);

        $data = $request->only(['full_name', 'email', 'message_form']);

        try {
            Mail::send('emails.sendMail', $data, function ($message) use ($data) {
                $message->to('tenghuyly35@gmail.com')
                        ->subject('New Message')
                        ->from($data['email'], $data['full_name']);
            });

            return redirect()->back()->with('success', 'Your message has been sent successfully.');
        } catch (\Exception $e) {
            Log::error("Mail send failed: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send your Message. Please try again later.');
        }
    }
}
