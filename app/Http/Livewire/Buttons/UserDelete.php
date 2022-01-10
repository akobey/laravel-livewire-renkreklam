<?php

namespace App\Http\Livewire\Buttons;

use Livewire\Component;

class UserDelete extends Component
{
    public $user;
    public $confirmingDeletion = false;

    public function confirmDeletion()
    {
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('confirming-delete');
        $this->confirmingDeletion = true;
    }

    public function delete()
    {
        $this->user->delete();
        session()->flash('success', 'Kullanıcı silindi');
        return redirect()->route('users.index');
    }
    public function render()
    {
        return view('livewire.buttons.user-delete');
    }
}
