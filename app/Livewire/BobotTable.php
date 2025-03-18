<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class BobotTable extends Component
{

    public $modalTambah = false;


    public $bobot;
    public $keterangan;

    public function toggleModalTambah() {
        $this->modalTambah = !$this->modalTambah;
    }


    public function deleteBobot($id) {
    }



    public function render()
    {
        return view('livewire.bobot-table');
    }
}
