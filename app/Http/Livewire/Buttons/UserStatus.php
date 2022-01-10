<?php

namespace App\Http\Livewire\Buttons;

use Livewire\Component;
use App\Models\User;

class UserStatus extends Component
{
    public User $user;
    public string $name;
    public bool $status;

    public function mount()
    {
        $this->status = $this->user->getAttribute('status');
    }

    public function updating($name, $value)
    {
        $this->user->setAttribute($name, $value)->save();
    }


    public function render()
    {
        return view('livewire.buttons.user-status');
    }
}
