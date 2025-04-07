<?php

namespace App\Livewire;

use App\Models\Kriteria;
use Livewire\Component;

class UserDashboard extends Component
{

    public $firstKriteria;
    public function mount() {
        $this->firstKriteria = Kriteria::first();
    }

    public function render()
    {
        return view('livewire.user-dashboard');
    }
}
