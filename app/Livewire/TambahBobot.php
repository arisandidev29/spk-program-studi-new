<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TambahBobot extends Component
{

    #[Rule('required')]
    public $bobot;

    #[Rule('required')]
    public $keterangan;

    public $modalOpen = false;

    public function saveBobot()
    {
        try{
            $this->validate();
            $this->reset(['bobot', 'keterangan']); // Reset input
            $this->modalOpen = false;
        } catch(ValidationException $e) {
            $this->modalOpen = true;
            throw $e;

        }
    }
    public function render()
    {
        return view('livewire.tambah-bobot');
    }
}
