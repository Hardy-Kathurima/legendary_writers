<?php

namespace App\Http\Livewire\GuestComponents;

use App\Mail\GuestMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{
    public $inputName;
    public $inputEmail;
    public $inputSubject;
    public $inputMessage;
    public $onlineStatus;

    public function sendEmail()
    {
        $this->validate([
            'inputName' => 'required',
            'inputEmail' => 'required',
            'inputSubject' => 'required',
            'inputMessage' => 'required'
        ]);

        $connected = @fsockopen("www.example.com", 80);
        if ($connected) {
            $is_conn = true;
            fclose($connected);
            Mail::to('legendary@test.com')->queue(new GuestMail($this->inputName, $this->inputEmail, $this->inputSubject, $this->inputMessage));
            $this->emit('guest-sent');
            $this->reset();
        } else {
            $is_conn = false;
            $this->emit('not-connected');
            $this->onlineStatus = "Not Connected to The internet";
        }
        return $is_conn;
    }
    public function render()
    {
        return view('livewire.guest-components.contact-us');
    }
}
