<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact'); // No need to specify the folder since it's directly in views
    }

    /**
     * Handle the form submission.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Here you would typically send the email or save the message
        // For example, using a Mail facade to send an email

        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
