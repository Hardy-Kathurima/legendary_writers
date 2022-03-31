<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\Order;
use Livewire\Component;
use App\Models\Conversation;

class DetailInProcess extends Component
{
    public $order_id;
    public $user_id;


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
        $orders = Order::where('id', $this->order_id)->with('clientuploads')->get();
        return view('livewire.admin-components.detail-in-process', ['orders' => $orders, 'user_id' => $this->user_id]);
    }
}
