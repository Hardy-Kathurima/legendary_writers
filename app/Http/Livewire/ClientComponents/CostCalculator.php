<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\Order;
use Livewire\Component;

class CostCalculator extends Component
{
    public $daysArray;
    public $academic_level;
    public $urgency;
    public $paper_type;
    public $number_pages;
    public $totalCost;


    public function mount()
    {
        $this->totalCost = "0";
        $this->daysArray = [];
        for ($i = 1; $i <= 30; $i++) {
            array_push($this->daysArray, $i);
        }
    }
    public function updatedAcademicLevel()
    {
        $this->totalCost = "0";
        $this->reset(['urgency', 'paper_type', 'number_pages']);
    }
    public function updatedUrgency()
    {
        $this->reset(['number_pages']);
        $this->totalCost = "0";
    }
    public function updatedNumberPages()
    {
        if ($this->academic_level && $this->urgency && $this->paper_type) {
            $this->totalCost = Order::getTotal($this->academic_level, $this->urgency, $this->number_pages);
        }
    }
    public function render()
    {
        return view('livewire.client-components.cost-calculator');
    }
}
