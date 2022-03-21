<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\User;
use Livewire\Component;
use App\Models\Conversation;

class ManageUsers extends Component
{
    public $user_id;
    public $name;
    public $role;
    public $email;
    public $deleteId;





    public function addUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'is_admin' => $this->role,
            'email' => $this->email,
            'password' => bcrypt('1234')
        ]);

        session()->flash('user-added', 'User was added Successfully');
        $this->reset();
        $this->emit("user-added");
    }
    public function editUser($id)
    {
        $user = User::where("id", $id)->first();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->role = $user->is_admin;
        $this->email = $user->email;
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'is_admin' => $this->role,
            ]);
            session()->flash('message', 'User was updated Successfully');
            $this->reset(['name', 'email', 'role']);
            $this->emit('userUpdated');
        }
    }
    public function showConfirm($id)
    {
        $this->deleteId = $id;
    }
    public function deleteUser()
    {
        if ($this->deleteId) {
            $id = User::findOrFail($this->deleteId);
            $id->delete();
        }
        session()->flash('deleteUser', 'User deleted successfully');
        $this->emit("user-deleted");
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
        $users = User::where('id', '!=', auth()->id())->get();

        return view('livewire.admin-components.manage-users', ['users' => $users]);
    }
}
