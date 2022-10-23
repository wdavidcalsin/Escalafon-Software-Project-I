<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SendPasswordbyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Informacion de contacto";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pass = Str::random(10);
        // dd($pass);
        $password = Hash::make($pass);

        return $this->view('emails.sendPassword', ["password" => $pass]);

        return $password;
    }
}
