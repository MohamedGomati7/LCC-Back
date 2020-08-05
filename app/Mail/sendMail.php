<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $firstname = $this->data['firstname'];
        $email = $this->data['email'];
        return $this->from($address = $email, $name = $email)->subject("LCC:" ." " . $firstname)->
        view('standardMessage')->with('data',$this->data);
    }
}
