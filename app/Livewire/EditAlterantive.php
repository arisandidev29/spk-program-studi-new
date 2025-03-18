<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditAlterantive extends Component
{
    #[Rule('required')]
    public $name;


    public $modalOpen = false;

    #[On('modaledit-open')]
    public function setValue($value) {
        $this->name= $value['name'];
    }

    public function editBobot() {
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
        return view('livewire.edit-alterantive');
    }
}
