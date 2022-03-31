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

    public function sendEmail()
    {
        $this->validate([
            'inputName' => 'required',
            'inputEmail' => 'required',
            'inputSubject' => 'required',
            'inputMessage' => 'required'
        ]);
        Mail::to('legendary@test.com')->send(new GuestMail($this->inputName, $this->inputEmail, $this->inputSubject, $this->inputMessage));
        $this->emit('guest-sent');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.guest-components.contact-us');
    }
}
