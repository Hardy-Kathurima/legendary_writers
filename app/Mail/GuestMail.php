<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GuestMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $inputName;
    protected $inputEmail;
    protected $inputSubject;
    protected $inputMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputName, $inputEmail, $inputSubject, $inputMessage)
    {
        $this->inputName = $inputName;
        $this->inputEmail = $inputEmail;
        $this->inputSubject = $inputSubject;
        $this->inputMessage = $inputMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->inputEmail)->subject("Legendary Writers")->markdown('mails.guest')->with([
            'guest_name' => $this->inputName,
            'guest_email' => $this->inputEmail,
            'guest_subject' => $this->inputSubject,
            'guest_message' => $this->inputMessage
        ]);
    }
}
