<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $client_name;
    public $orderCost;
    public $paperType;
    public $deadline;
    public $clientEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client_name, $clientEmail, $orderCost, $paperType, $deadline)
    {
        $this->client_name = $client_name;
        $this->orderCost = $orderCost;
        $this->paperType = $paperType;
        $this->deadline = $deadline;
        $this->clientEmail = $clientEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->clientEmail)->markdown('mails.order')->with([
            'clientName' => $this->client_name,
            'paper_type' => $this->paperType,
            'order_cost' => $this->orderCost,
            'order_deadline' => $this->deadline

        ]);
    }
}
