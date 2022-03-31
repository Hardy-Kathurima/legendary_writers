<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $userName;
    protected  $userEmail;
    protected $inputSubject;
    protected $inputMessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName, $userEmail, $inputSubject, $inputMessage)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
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
        return $this->from($this->userEmail)->subject("Legendary Writers")->markdown('mails.client')->with([
            'user_subject' => $this->inputSubject,
            'user_name' => $this->userName,
            'user_message' => $this->inputMessage,
        ]);
    }
}
