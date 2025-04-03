<?php

namespace App\Livewire;

use App\Service\AlternativeServiceInterface;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TambahAlterantive extends Component
{

    public $modalOpen = false;
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $kode;


    public function saveAlternative(AlternativeServiceInterface $alternativeService) {
        try{
            $this->validate();
            $alternativeService->createAlternative([
                'kode' => $this->kode,
                'name' => $this->name
            ]);
            $this->modalOpen = false;
            $this->reset(['name','kode']);
            $this->dispatch('alert-success',message : "Success Tambah Alternative  !");
            $this->dispatch('refresh-alterantive');
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
