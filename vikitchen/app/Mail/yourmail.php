<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class yourmail extends Mailable
{
    use Queueable, SerializesModels;
    public $token;
    /**
     * Create a new message instance.
     *`
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }
    public function __construct($token)

    {

        $this->token = $token;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $token;
        return $this->view('admin.email')->subject('Your Subject');
        // $this->view('emails.orders.shipped');

        // $this->withSwiftMessage(function ($message) {
        //     $message->getHeaders()
        //             ->addTextHeader('Custom-Header', 'HeaderValue');
        // });
    }
}
