<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $text )
    {
        $this->name  = $name;
        $this->email = $email;
        $this->text  = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view( 'mail.view' )
                    ->from( $this->email, $this->name )
                    ->replyTo( $this->email )
                    ->subject( 'Contact form via felixmade.me' )
                    ->with([
                        'name'  => $this->name,
                        'email' => $this->email,
                        'text'  => $this->text
                    ]);
    }
}
