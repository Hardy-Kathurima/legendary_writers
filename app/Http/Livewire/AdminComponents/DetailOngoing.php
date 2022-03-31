<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use App\Mail\CompleteOrder;
use App\Models\AdminUpload;
use App\Models\Conversation;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DetailOngoing extends Component
{
    public $order_id;
    public $user_id;
    public $file_preview;
    public $preview_detail;
    public $file_name;
    public $completed;
    public $completed_order;
    public $details;
    use WithPagination;

    use WithFileUploads;
    public function uploadFile()
    {
        $this->validate([
            'file_preview' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,doc,docx,pdf|max:5048',
            'preview_detail' => 'required|min:20',
            'completed' => 'nullable'
        ]);
        $this->file_name = $this->file_preview->getClientOriginalName();
        $this->file_preview->storeAs('admin_uploads', $this->file_name);



        AdminUpload::create([
            'file_preview' => $this->file_name,
            'preview_detail' => $this->preview_detail,
            'order_id' => $this->order_id,
            'completed' => $this->completed,
        ]);
        if ($this->completed == true) {
            Order::where('id', $this->order_id)->update([
                'order_status' => true,
            ]);
            $this->userName = auth()->user()->name;
            $this->userEmail = auth()->user()->email;
            $this->details = "Thankyou for Placing an order with us, Your order has been completed,please find attached file and download";
            Mail::to('legendary@test.com')->send(new CompleteOrder($this->userName, $this->userEmail, $this->file_name, $this->details));
            $this->emit('order-completed');
        }
        $this->reset(['file_preview', 'preview_detail']);
        $this->emit('adminUpload');
    }
    public function startConversation($userId)
    {
        $conversation = Conversation::firstOrCreate([
            'sender_id' => auth()->id(),
            'receiver_id' => $userId,

        ]);
        return redirect("/admin/home/messages")->with('selectedConversation', $conversation);
    }
    public function render()
    {
        $uploads = AdminUpload::where('order_id', $this->order_id)->paginate(1);
        $order_id = Order::where('id', $this->order_id)->value('user_id');
        $users = User::where('id', $order_id)->get();
        $orders = Order::where('id', $this->order_id)->with('clientuploads')->get();
        return view('livewire.admin-components.detail-ongoing', ['orders' => $orders, 'user_id' => $this->user_id, 'uploads' => $uploads, 'users' => $users]);
    }
}
