<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],

            'phone' => [
                'required',
                'string',
                'max:30',
            ],

            'email' => [
                'required',
                'email',
                'max:150',
            ],

            'subject' => [
                'nullable',
                'string',
                'max:200',
            ],

            'message' => [
                'required',
                'string',
                'min:10',
                'max:5000',
            ],
        ], [
            'name.required' => 'Please enter your name.',

            'phone.required' => 'Please enter your phone number.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',

            'message.required' => 'Please enter your enquiry.',
            'message.min' => 'Your message should be at least 10 characters.',
        ]);

        Enquiry::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your enquiry has been submitted successfully.');
    }
}