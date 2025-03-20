<?php

namespace App\Livewire;

use Livewire\Component;

class AlternativeTable extends Component
{

    public function deleteAlternative($id) {
        dd($id);
    }
    public function render()
    {
        return view('livewire.alternative-table');
    }
}
