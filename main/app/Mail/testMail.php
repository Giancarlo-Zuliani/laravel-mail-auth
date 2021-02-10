<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class testMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
    
     *
     * @return void
     */
    public function __construct($teststring)
    {
        $this -> teststring = $teststring;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        -> from('no-reply@laravel.com')
        ->view('mail.testMail');
    }
}
