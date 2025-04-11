<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUserResult extends Component
{
    public $user;
    public $chartData;

    public function mount(User $user,$id) {
        $this->user = $user->find($id);
        $this->chartData = $this->user->hasilRekomendasi->map(function ($item) {
            return [ 
                'alternative' => $item->alternative->name,
                'vektor_v' => $item->vektor_v
            ]; 
        })->toArray();

    }
    public function render()
    {
        return view('livewire.admin-user-result');
    }
}
