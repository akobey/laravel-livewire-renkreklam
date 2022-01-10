<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Passwordedit extends Component
{
    public $user_id;
    public $newpassword;
    public $newpassword_confirmation;

    protected $rules = [
        'newpassword' => 'required|min:6|confirmed',
    ];
    protected $messages = [
        'newpassword.required' => 'Parola giriniz',
        'newpassword.min' => 'Parola en az 6 karakter olmalıdır.',
        'newpassword.confirmed' => 'Parola doğrulanmadı.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function mount($user_id)
    {
        $user = User::find($user_id);
        $this->user_id = $user->id;
        $this->newpassword = $user->newpassword;
    }



    public function update()
    {
        $validatedData = $this->validate();

        $user = User::find($this->user_id);
        $user->password = bcrypt($this->newpassword);

        $user->save();

        return redirect()->route('users.index')->with('success', 'Kullanıcı parola güncellendi');

    }

    public function render()
    {
        return view('livewire.admin.user.passwordedit');
    }
}
