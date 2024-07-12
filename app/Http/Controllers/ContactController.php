<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showform()
    {
        return view('pages.contact');
    }
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('udeeshadilshani@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Thank you for contacting us!');
    }
}
