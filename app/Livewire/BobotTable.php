<?php

namespace App\Livewire;

use App\Models\Bobot;
use App\Service\BobotServiceInterface;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class BobotTable extends Component
{
    use WithPagination;

    public $modalTambah = false;


    public $bobot;
    public $keterangan;

    // public $bobots;

    public function mount(BobotServiceInterface $bobotService) {
        // $this->bobots = $bobotService->getBobotsByPagination(2); 
        // $this->bobots = Bobot::paginate(2); 
        // dd($this->bobots);
    }
    

    public function toggleModalTambah() {
        $this->modalTambah = !$this->modalTambah;
    }


    public function deleteBobot(BobotServiceInterface $bobotService,$id) {
        $bobotService->deleteBobot($id);
        $this->dispatch('alert-success',message : 'Success Delete Bobot');
    }




    public function render()
    {
        return view('livewire.bobot-table', [
            'bobots' => Bobot::paginate(5)
        ]);
    }
}
