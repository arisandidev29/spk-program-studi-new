<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Question extends Component
{
    #[Layout("components.layout")]

    public function submit() {
        $this->dispatch('send');
    }

    public function render()

    {
        return view('livewire.question');
    }
}
