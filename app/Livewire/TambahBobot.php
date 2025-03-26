<?php

namespace App\Livewire;

use App\Service\BobotServiceInterface;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TambahBobot extends Component
{

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $bobot;

    #[Rule('required')]
    public $keterangan;

    public $modalOpen = false;

    public function saveBobot(BobotServiceInterface $bobotService)
    {
        try{
            $this->validate();
            $bobotService->createBobot([
                'name' => $this->name,
                'keterangan' => $this->keterangan,
                'bobot' => $this->bobot 
            ]);
            $this->dispatch('refresh-bobot');
            $this->dispatch('alert-success', message : 'Sukses Tambah Bobot !');
            $this->reset(['bobot', 'keterangan','name']); // Reset input
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
