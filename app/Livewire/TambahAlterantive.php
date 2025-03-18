<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TambahAlterantive extends Component
{

    public $modalOpen = false;
    #[Rule('required')]
    public $name;


    public function saveAlternative() {
        try{
            $this->validate();
            $this->modalOpen = false;
        } catch(ValidationException $e) {
            $this->modalOpen = true;
            throw $e;

        }
    }
    public function render()
    {
        return view('livewire.tambah-alterantive');
    }
}
