<?php

namespace App\Livewire;

use App\Models\Kriteria;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboard extends Component
{

    public $firstKriteria;
    public $hasmadeChoice = false;

    public function mount() {
        $this->firstKriteria = Kriteria::first();
        if(Auth::user()->UserJawaban()->exists()) {
            $this->hasmadeChoice = true;
        } else {
            $this->hasmadeChoice = false;
        }
        
    }

    public function render()
    {
        return view('livewire.user-dashboard');
    }
}
