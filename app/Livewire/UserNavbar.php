<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class UserNavbar extends Component
{

    public $user;

    public function mount() {
        $this->user = Auth::user();
    }
    
    #[On("profile-updated")]
    public function updateProfile() {
        $this->user = Auth::user();
    }


    public function render()
    {
        return view('livewire.user-navbar');
    }
}
