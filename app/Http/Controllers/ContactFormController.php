<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rules\GoogleRecaptcha;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('pages.contact');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'tel' => 'nullable',
            'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ],
        [
         'name.required'=> 'Het veld naam is verplicht',
         'email.required'=> 'Het veld e-mailadres is verplicht',
         'email.email'=> 'Vul een geldig e-mailadres in',
         'message.required'=> 'Het veld bericht is verplicht',
         'g-recaptcha-response.required'=> 'Bevestig dat je geen robot bent',
        ]);



        Mail::to('benblijmetjij@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact')
            ->with('successs', 'Bedankt voor uw bericht, wij nemen z.s.m contact met u op.');
    }
}
