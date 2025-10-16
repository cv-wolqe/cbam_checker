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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically send the email using a mail service
        // For demonstration, we'll just return a success message

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
