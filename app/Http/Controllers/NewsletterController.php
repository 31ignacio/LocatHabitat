<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterInscriptionMail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    //

    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ], [
            'email.required' => 'Votre email est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'email.unique' => 'Cet email est déjà inscrit à notre newsletter.',
        ]);

        $email= $request->email;
        //dd($email);
        

        Newsletter::create($request->only('email'));

        Mail::to($email)->send(new NewsletterInscriptionMail($email));


        return redirect()->back()->with('success', 'Vous avez été abonné à notre newsletter avec succès !');
    }
}
