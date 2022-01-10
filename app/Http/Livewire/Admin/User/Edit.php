<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $user_id;
    public $name;
    public $email;

    public function mount($user_id)
    {
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
        ]);
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;

        $user->save();

//        session()->flash('message', 'Kullanıcı güncellendi');

        return redirect()->route('users.index')->with('success', 'Kullanıcı güncellendi');

    }

    public function render()
    {
        return view('livewire.admin.user.edit');
    }
}
