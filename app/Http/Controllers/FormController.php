<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
{
    $message = null;

    if ($request->isMethod('post')) {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:255'
        ]);

        // Préparer les données pour l'email
        $details = [
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Envoyer l'email
        Mail::to('awademeronaldoo@gmail.com')->send(new ContactMail($details));

        $message = "Formulaire soumis et email envoyé avec succès !";
    }

    return view('index', compact('message'));
}

}
