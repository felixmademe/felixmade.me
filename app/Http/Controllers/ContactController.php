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
            'policy' => 'accepted',
            'recaptcha' => 'required',
        ]);

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => env( 'GOOGLE_RECAPTCHA_SECRET' ),
            'response' => $request->recaptcha
        ];

        $options = [
            'http' => [
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'method'  => 'POST',
                'content' => http_build_query( $data )
            ]
        ];

        $context = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $json = json_decode( $result );

        if( $json->success != true )
        {
            return response()->json( [ 'error' => 'reCAPTCHA error' ], 200);
        }

        Mail::to( env( 'MAIL_FROM_ADDRESS' ) )
            ->send( new Contact(
                $request->name,
                $request->email,
                $request->text
            ));

        return response()->json( [ 'result' => 'your message have been sent' ], 200);
    }
}
