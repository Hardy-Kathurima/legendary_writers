<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Order;
use Livewire\Component;

class DetailCompleted extends Component
{
    public $order_id;
    public $user_id;

    public function render()
    {
        $orders = Order::where('id', $this->order_id)->with('clientuploads')->get();
        return view('livewire.admin-components.detail-completed', ['orders' => $orders]);
    }
}
