<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Order;
use Livewire\Component;

class OnGoing extends Component
{
    public function render()
    {
        $orders = Order::where('payment_status', true)->with('clientuploads')->get();
        return view('livewire.admin-components.on-going', ['orders' => $orders]);
    }
}
