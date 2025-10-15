<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Insert data into the contacts table
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Handle AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => '<div class="alert alert-success">Thank you for contacting us! We will get back to you soon.</div>'
            ]);
        }

        // Redirect to confirmation page for regular form submissions
        return redirect()->route('contact.confirmation');
    }
}
