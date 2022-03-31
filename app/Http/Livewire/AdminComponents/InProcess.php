<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Order;
use Livewire\Component;

class InProcess extends Component
{
    public $deleteId;
    public function showOrder($id)
    {
        $this->deleteId = $id;
    }
    public function deleteOrder()
    {
        if ($this->deleteId) {
            $id = Order::findOrFail($this->deleteId);
            $id->delete();
        }
        $this->emit("order-deleted");
    }
    public function render()
    {
        $orders = Order::where('payment_status', false)->with("clientuploads")->get();
        return view('livewire.admin-components.in-process', ['orders' => $orders]);
    }
}
