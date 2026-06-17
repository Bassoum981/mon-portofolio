<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validation des données
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Envoi du mail
        Mail::to('ton-adresse@email.com')->send(new ContactFormMail($data));

        // 3. Retour avec message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}