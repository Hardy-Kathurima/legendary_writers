<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Payment;
use Livewire\Component;
use App\Models\Braintree;
use Livewire\WithPagination;

class Billing extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paymentId;
    public $sortBy = "order_id";
    public $sortDirection = "asc";
    public $perPage = 10;
    public $search = '';
    public $look = '';


    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }
        return $this->sortBy = $field;
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function showPayment($id)
    {
        $this->paymentId = $id;
    }
    public function render()
    {
        $paypal_payments = Payment::where('payment_status', 'approved')->with('order')->search($this->search)->orderBy($this->sortBy, $this->sortDirection)->paginate(5);
        $cards = Braintree::where('payment_status', 'authorized')->with('order')->look($this->look)->orderBy($this->sortBy, $this->sortDirection)->paginate(5, ['*'], 'cardsPage');

        $total_paypal = Payment::where('payment_status', 'approved')->sum('amount');
        $total_card =  Braintree::where('payment_status', 'authorized')->sum('amount');



        $payPals = Payment::where('id', $this->paymentId)->get();
        return view('livewire.admin-components.billing', ['paypal_payments' => $paypal_payments, 'payPals' => $payPals, 'cards' => $cards, 'total_card' => $total_card, 'total_paypal' => $total_paypal]);
    }
}
