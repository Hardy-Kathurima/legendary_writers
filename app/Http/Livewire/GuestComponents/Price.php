<?php

namespace App\Http\Livewire\GuestComponents;

use Livewire\Component;

class Price extends Component
{
    public $prices;

    public function mount()
    {

        $this->prices = [

            ["deadline" => "24 hrs", "highschool" => "$7.00", "college" => "$9.00", "university" => "$10.00", "masters" => "$13.00", "phd" => "$15.00"],
            ["deadline" => "48 hrs", "highschool" => "$6.00", "college" => "$7.00", "university" => "$8.00", "masters" => "$10.00", "phd" => "$12.00"],
            ["deadline" => "3 days", "highschool" => "$6.00", "college" => "$7.00", "university" => "$8.00", "masters" => "$10.00", "phd" => "$12.00"],
            ["deadline" => "5 days", "highschool" => "$6.00", "college" => "$7.00", "university" => "$8.00", "masters" => "$10.00", "phd" => "$12.00"],
            ["deadline" => "7 days", "highschool" => "$6.00", "college" => "$7.00", "university" => "$8.00", "masters" => "$10.00", "phd" => "$12.00"],
            ["deadline" => "14 days", "highschool" => "$6.00", "college" => "$7.00", "university" => "$8.00", "masters" => "$10.00", "phd" => "$12.00"],
        ];
    }
    public function render()
    {
        return view('livewire.guest-components.price', ['prices' => $this->prices]);
    }
}
