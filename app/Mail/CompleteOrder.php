<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompleteOrder extends Mailable
{
    use Queueable, SerializesModels;
    protected $userName;
    protected $userEmail;
    protected $details;

    protected $file_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName, $userEmail, $file_name, $details)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->details = $details;
        $this->file_name = $file_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.complete')
            ->from($this->userEmail)
            ->subject("Order Completed")
            ->attach(storage_path("app/admin_uploads/$this->file_name"))->with([
                'user_name' => $this->userName,
                'user_detail' => $this->details,
            ]);
    }
}
