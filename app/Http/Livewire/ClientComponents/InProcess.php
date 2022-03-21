<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class InProcess extends Component
{
    public $search;
    public $deleteId;
    use WithPagination;

    public function showConfirm($id)
    {
        $this->deleteId = $id;
    }

    public function deleteOrder()
    {
        if ($this->deleteId) {
            $id = Order::findOrFail($this->deleteId);
            $id->delete();
        }
        session()->flash('deleteOrder', 'order deleted successfully');
        $this->emit("order-deleted");
    }
    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $orders = Order::where('payment_status', false)
            ->where('user_id', auth()->user()->id)
            ->where('paper_title', 'LIKE', $searchTerm)
            ->paginate(5);
        return view('livewire.client-components.in-process', ['orders' => $orders]);
    }
}
