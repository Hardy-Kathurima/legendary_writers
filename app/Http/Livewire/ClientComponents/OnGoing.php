<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\WithPagination;


class OnGoing extends Component
{
    public $search;
    use WithPagination;
    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $orders = Order::where('payment_status', true)
            ->where('user_id', auth()->user()->id)
            ->where('paper_title', 'LIKE', $searchTerm)
            ->paginate(5);
        return view('livewire.client-components.on-going', ['orders' => $orders]);
    }
}
