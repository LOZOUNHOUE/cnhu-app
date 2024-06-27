<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contactDetails = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Logique pour envoyer l'email (facultatif)
        // Mail::to('example@example.com')->send(new ContactMail($contactDetails));

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}

