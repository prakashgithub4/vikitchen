<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
    use App\User;

class bank_mail extends Mailable
{
    use Queueable, SerializesModels;

    public $newthing;
    /**
     * Create a new message instance.
     *`
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }
    public function __construct($newthing)

    {

        $this->newthing = $newthing;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $token;
        return $this->view('mail.buyer')->subject(' Order Confirmation! From Arttire Boutique');
        // $this->view('emails.orders.shipped');

        // $this->withSwiftMessage(function ($message) {
        //     $message->getHeaders()
        //             ->addTextHeader('Custom-Header', 'HeaderValue');
        // });
    }
}
