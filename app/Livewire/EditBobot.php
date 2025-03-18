<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditBobot extends Component
{

    #[Rule('required')]
    public $bobot ;
    #[Rule('required')]
    public $keterangan;


    public $modalOpen = false;

    #[On('modaledit-open')]
    public function setValue($value) {
        $this->bobot = $value['bobot'];
        $this->keterangan= $value['keterangan'];
    }

    public function editBobot() {
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
        return view('livewire.edit-bobot');
    }
}
