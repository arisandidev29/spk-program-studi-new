<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginForm extends Component
{
    #[Rule('required')]
    public $username;
    #[Rule('required')]
    public $password;

    public $rememberMe;

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            "name" => $this->username,
            "password" => $this->password
        ], $this->rememberMe)) {
            Session::regenerate();
            return redirect()->route('admin.dashboard');
        }

        session()->flash('error','Username Atau Password Salah');
    }
    public function render()
    {
        return view('livewire.login-form');
    }
}
