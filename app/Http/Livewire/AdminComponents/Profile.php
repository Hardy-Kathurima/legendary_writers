<?php

namespace App\Http\Livewire\AdminComponents;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $user_id;
    public $name;
    public $email;

    public function editProfile($id)
    {
        $user = User::where("id", $id)->first();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function updateUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);

            $this->reset(['name', 'email']);
            $this->emit('update-profile');
        }
    }
    public function render()
    {
        $users = User::where('id', auth()->user()->id)->get();
        return view('livewire.admin-components.profile', ['users' => $users]);
    }
}
