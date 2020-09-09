<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'tel' => 'nullable'
        ],
        [
         'name.required'=> 'Het veld naam is verplicht',
         'email.required'=> 'Het veld e-mailadres is verplicht',
         'email.email'=> 'Vul een geldig e-mailadres in',
         'message.required'=> 'Het veld bericht is verplicht',
        ]);



        Mail::to('benblijmetjij@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact')
            ->with('message', 'Bedankt voor uw bericht, wij nemen z.s.m contact met u op.');
    }
}
