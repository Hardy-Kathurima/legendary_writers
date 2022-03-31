<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Payment;
use Livewire\Component;
use App\Models\Braintree;

class Billing extends Component
{
    public $paymentId;

    public function showPayment($id)
    {
        $this->paymentId = $id;
    }
    public function render()
    {
        $paypal_payments = Payment::where('payment_status', 'approved')->with('order')->get();
        $cards = Braintree::where('payment_status', 'authorized')->with('order')->get();

        $total_paypal = Payment::where('payment_status', 'approved')->sum('amount');
        $total_card =  Braintree::where('payment_status', 'authorized')->sum('amount');



        $payPals = Payment::where('id', $this->paymentId)->get();
        return view('livewire.admin-components.billing', ['paypal_payments' => $paypal_payments, 'payPals' => $payPals, 'cards' => $cards, 'total_card' => $total_card, 'total_paypal' => $total_paypal]);
    }
}
