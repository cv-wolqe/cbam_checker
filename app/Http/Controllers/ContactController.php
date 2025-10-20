<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

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
        Mail::mailer('smtp')->to('christian.volk@wolqe.co')->send(new ContactMail($details));
        return redirect()->route('home')->withFragment('contact')->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
    public function sendReport(Request $request) {
        // Validate the request data
        $request->validate([
            'email' => 'required|string|max:255'
        ]);

        $details = [
            
            'email' => $request->email
        ];
        // Send email using Laravel's Mail facade
        // Mail::to('christian.volk@wolqe.co')->send(new \App\Mail\ContactMail($details));

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
