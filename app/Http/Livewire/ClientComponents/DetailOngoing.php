<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\User;
use App\Models\Order;
use Livewire\Component;
use App\Models\AdminUpload;
use App\Models\ClientUpload;
use App\Models\Conversation;
use Livewire\WithFileUploads;

class DetailOngoing extends Component
{
    public $orders;
    public $uploadId;
    public $order_id;
    public $order_detail;
    public $order_file;
    public $file_name;



    use WithFileUploads;

    public function uploadFile($id)
    {
        $this->validate([

            'order_file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,doc,docx,pdf|max:5048',
            'order_detail' => 'required',

        ]);

        $this->file_name = $this->order_file->getClientOriginalName();
        $this->order_file->storeAs('client_uploads', $this->file_name);

        ClientUpload::create([
            'order_id' => $id,
            'order_file' => $this->file_name,
            'order_detail' => $this->order_detail
        ]);
        session()->flash('message', 'file uploaded successfully');
        Order::where("id", $this->order_id)->update([
            'order_status' => true,

        ]);
        $this->reset(["order_file", "order_detail"]);
        $this->emit("fileUploaded");
    }

    public function startConversation($userId)
    {
        $conversation = Conversation::firstOrCreate([
            'sender_id' => auth()->id(),
            'receiver_id' => $userId,

        ]);
        return redirect("/home/orders/messages")->with('selectedConversation', $conversation);
    }



    public function render()
    {
        $files_uploaded = ClientUpload::where('order_id', $this->uploadId)->get();
        $uploads = AdminUpload::where('order_id', $this->uploadId)->paginate(1);
        $admin_id = User::where('is_admin', true)->value('id');
        return view('livewire.client-components.detail-ongoing', ['orders' => $this->orders, 'admin_id' => $admin_id, 'files_uploaded' => $files_uploaded, 'uploads' => $uploads]);
    }
}
