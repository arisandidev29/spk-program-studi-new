<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\UserJawaban;
use Livewire\Component;

class UserResultJawaban extends Component
{

    public $user;
    public $jawabanUser;

    public function mount(User $user) {
        $this->jawabanUser = $user->UserJawaban;
    }



    public function render()
    {
        return view('livewire.user-result-jawaban');
    }
}
