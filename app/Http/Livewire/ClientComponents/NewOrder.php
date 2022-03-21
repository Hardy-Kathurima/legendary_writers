<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class NewOrder extends Component
{
    use WithFileUploads;
    public $user_id;
    public $order_cost;
    public $order_id;
    public $academic_level = '';
    public $urgency;
    public $subject;
    public $paper_type;
    public $number_pages;
    public $plagiarism_report;
    public $copies_sources;
    public $page_summary;
    public $paper_title;
    public $language_style;
    public $paper_style;
    public $number_sources;
    public $paper_details;
    public $paper_file;
    public $terms;
    public $file_name;


    public $totalCost;



    public $totalSteps = 3;
    public $currentStep = 1;

    public $daysArray;



    public function mount()
    {
        $this->currentStep = 1;
        $this->daysArray = [];
        for ($i = 1; $i <= 30; $i++) {
            array_push($this->daysArray, $i);
        }
    }

    public function updatedAcademicLevel()
    {
        $this->totalCost = "0.00";
        $this->reset(['urgency', 'subject', 'paper_type', 'plagiarism_report', 'page_summary', 'copies_sources', 'number_pages']);
    }



    public function updatedNumberPages()
    {
        if ($this->academic_level && $this->urgency && $this->paper_type && $this->subject) {
            $this->totalCost = order::getTotal($this->academic_level, $this->urgency, $this->number_pages);
        }
    }
    public function updatedUrgency()
    {
        $this->reset(['paper_type', 'subject', 'number_pages', 'plagiarism_report', 'copies_sources', 'page_summary']);
    }

    public function updatedPlagiarismReport($value)
    {
        if ($value && $this->number_pages && $this->academic_level) {
            $this->totalCost = $this->totalCost + 5;
        } else {
            $this->totalCost -= 5;
        }
    }
    public function updatedCopiesSources($value)
    {
        if ($value && $this->number_pages && $this->academic_level) {
            $this->totalCost = $this->totalCost + 5;
        } else {
            $this->totalCost -= 5;
        }
    }
    public function updatedPageSummary($value)
    {
        if ($value && $this->number_pages && $this->academic_level) {
            $this->totalCost = $this->totalCost + 5;
        } else {
            $this->totalCost -= 5;
        }
    }



    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }


    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }
    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'academic_level' => 'required',
                'urgency' => 'required',
                'subject' => 'required',
                'paper_type' => 'required',
                'number_pages' => 'required'
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'paper_title' => 'required',
                'language_style' => 'required',
                'paper_style' => 'required',
            ]);
        }
    }

    public function addOrder()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 3) {
            $this->validate([
                'paper_details' => 'required',
                'paper_file' => 'nullable|mimes:jpg,jpeg,png,csv,txt,xlx,xls,doc,docx,pdf|max:5048',
                'terms' => 'accepted'
            ]);
        };


        if (!is_null($this->paper_file)) {
            $this->file_name = $this->paper_file->getClientOriginalName();
            $this->paper_file->storeAs('client_uploads', $this->file_name);
        } else {
            $this->file_name = "No file uploaded";
        }


        $user_id = auth()->user()->id;
        $order_id = $user_id . Carbon::now()->timestamp;

        $plagiarism_report = 0;
        $copies_sources = 0;
        $page_summary = 0;


        if ($this->plagiarism_report) {
            $plagiarism_report = 5;
        }
        if ($this->copies_sources) {
            $copies_sources = 5;
        }
        if ($this->page_summary) {
            $page_summary = 5;
        }

        $academic_level = $this->academic_level;
        $urgency = $this->urgency;
        $number_pages = $this->number_pages;

        $order_cost =  Order::calculateCost($academic_level, $urgency, $number_pages, $plagiarism_report, $copies_sources, $page_summary);



        $orders = Order::create([
            'user_id' => $user_id,
            'order_id' => $order_id,
            'order_cost' => $order_cost,
            'academic_level' => $this->academic_level,
            'urgency' => Carbon::now()->addDays($this->urgency)->format('d-M-Y'),
            'subject' => $this->subject,
            'paper_type' => $this->paper_type,
            'number_pages' => $this->number_pages,
            'plagiarism_report' => $this->plagiarism_report,
            'copies_sources' => $this->plagiarism_report,
            'page_summary' => $this->page_summary,
            'paper_title' => $this->paper_title,
            'language_style' => $this->language_style,
            'paper_style' => $this->paper_style,
            'number_sources' => $this->number_sources,
            'paper_details' => $this->paper_details,
            'paper_file' => $this->file_name,
            'terms' => $this->terms,
        ]);



        return redirect()->route("client.payment", encrypt($order_id));
    }





    public function render()
    {
        return view('livewire.client-components.new-order');
    }
}
