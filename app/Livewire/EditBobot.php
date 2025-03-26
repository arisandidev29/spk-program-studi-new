<?php

namespace App\Livewire;

use App\Service\BobotServiceInterface;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditBobot extends Component
{

    public $id;

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $keterangan;

    #[Rule('required')]
    public $bobot;



    public function mount(BobotServiceInterface $bobotService, $id) {
        $bobot = $bobotService->getBobotById($id);
        $this->id = $id;

        $this->fill(
           $bobot->only(['name','keterangan','bobot']) 
        );
    }

    public function edit(BobotServiceInterface $bobotSevice) {
            $this->validate();
            
            $bobotSevice->updateBobot($this->id,[
                'name' => $this->name,
                'keterangan' => $this->keterangan,
                'bobot' => $this->bobot
            ]);
            $this->dispatch('alert-success',message : 'Success Update Bobot !');
    }

    public function render()
    {
        return view('livewire.edit-bobot');
    }
}
