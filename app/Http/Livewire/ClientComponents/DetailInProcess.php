<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\User;
use Livewire\Component;
use App\Models\Conversation;

class DetailInProcess extends Component
{
    public $orders;

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
        $admin_id = User::where('is_admin', true)->value('id');
        return view('livewire.client-components.detail-in-process', ['orders' => $this->orders, 'admin_id' => $admin_id]);
    }
}
