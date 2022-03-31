<?php

namespace App\Http\Livewire\ClientComponents;

use Livewire\Component;
use App\Mail\ClientEmail;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{
    public $inputSubject;
    public $inputMessage;
    public $userName;
    public $userEmail;

    public function sendEmail()
    {
        $this->validate([
            'inputSubject' => 'required',
            'inputMessage' => 'required|min:20'
        ]);
        $this->userName = auth()->user()->name;
        $this->userEmail = auth()->user()->email;
        Mail::to('legendary@test.com')->send(new ClientEmail($this->userName, $this->userEmail, $this->inputSubject, $this->inputMessage));
        $this->emit('email-sent');
    }
    public function render()
    {
        return view('livewire.client-components.contact-us');
    }
}
