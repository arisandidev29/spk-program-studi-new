<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProgramStudiAnswer extends Component
{
    public $programStudi;
    public $description;

    #[Validate('required', message: 'Wajib di pililh salah satu !')]
    public $selected;

    public function setSelectedValue(string $value) {
        $this->selected = $value;
    }

    #[On('send')]
    public function validateRadion() {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.program-studi-answer');
    }
}
