<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|regex:/^[a-zA-Z\s]*$/|min:3|max:30',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ];
    protected $messages = [
        'name.required' => 'Adınızı giriniz.',
        'name.regex' => 'Sadece karakter girilebilir',
        'name.min' => 'En az 3 karakter girilebilir',
        'name.max' => 'En fazla 30 karakter girilebilir',
        'email.required' => 'Email giriniz.',
        'email.email' => 'Geçerli bir email giriniz.',
        'email.unique' => 'Bu email kullanımda.',
        'password.required' => 'Parola giriniz',
        'password.min' => 'Parola en az 6 karakter olmalıdır.',
        'password.confirmed' => 'Parola doğrulanmadı.',
    ];

    protected $validationAttributes = [
        'name' => 'name',
        'email' => 'email',
        'password' => 'parola',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function create()
    {

        $validatedData = $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);


        return redirect()->route('users.index')->with('success', 'Kullanıcı eklendi');
    }

    public function render()
    {
        return view('livewire.admin.user.create');
    }
}
