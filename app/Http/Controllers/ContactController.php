<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('pages/contact');
    }
    public function sendEmail(Request $request) {
        // Validate the request data
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'email' => $request->email,
            'message' => $request->message
        ];
        // Send email using Laravel's Mail facade
        Mail::to('christian.volk@wolqe.co')->send(new \App\Mail\ContactMail($details));

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
