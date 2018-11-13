<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contactForm ( Request $request )
    {
        $request->validate ([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'text'  => 'required|string',
            'terms' => 'accepted'
        ]);

        Mail::to( env( 'MAIL_FROM_ADDRESS' ) )
            ->send( new Contact(
                $request->name,
                $request->email,
                $request->text
            ));

        return response()->json( [ 'result' => 'your message have been sent' ], 200);
    }
}
