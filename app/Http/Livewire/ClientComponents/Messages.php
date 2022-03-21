<?php

namespace App\Http\Livewire\ClientComponents;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;
use App\Models\Conversation;

class Messages extends Component
{
    public $body;
    public $selectedConversation;

    public function mount()
    {
        if (session()->has('selectedConversation')) {
            return $this->selectedConversation = session('selectedConversation');
        }
        $this->selectedConversation = Conversation::query()->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->first();
    }
    public function startConversation($userId)
    {
        $conversation = Conversation::firstOrCreate([
            'sender_id' => auth()->id(),
            'receiver_id' => $userId,

        ]);
        return redirect(request()->header('Referer'));
    }
    public function sendMessage()
    {
        Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'user_id' => auth()->id(),
            'body' => $this->body
        ]);
        $this->reset('body');
        $this->viewMessage($this->selectedConversation->id);
    }

    public function viewMessage($conversationId)
    {
        $this->selectedConversation = Conversation::findOrFail($conversationId);
    }
    public function render()
    {
        $conversations = Conversation::query()->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id())
            ->get();
        $admin_id = User::where('is_admin', true)->value('id');

        return view('livewire.client-components.messages', ['conversations' => $conversations, 'admin_id' => $admin_id]);
    }
}
