<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\Order;
use Livewire\Component;

class PaymentMethod extends Component
{
    public $order_id;
    public function render()
    {
        $orders = Order::where('order_id', $this->order_id)->get();
        return view('livewire.client-components.payment-method', ['orders' => $orders]);
    }
}
