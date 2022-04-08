<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Completed extends Component
{
    use WithPagination;
    public $sortBy = "order_id";
    public $sortDirection = "asc";
    public $perPage = 10;
    public $search = '';

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

    public function render()
    {
        $orders = Order::where('order_status', true)->with('clientuploads')->search($this->search)->orderBy($this->sortBy, $this->sortDirection)->paginate($this->perPage);
        return view('livewire.admin-components.completed', ['orders' => $orders]);
    }
}
