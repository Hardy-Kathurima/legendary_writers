<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Order;
use Livewire\Component;

class Completed extends Component
{
    public function render()
    {
        $orders = Order::where('order_status', true)->with('clientuploads')->get();
        return view('livewire.admin-components.completed', ['orders' => $orders]);
    }
}
