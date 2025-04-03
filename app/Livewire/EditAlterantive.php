<?php

namespace App\Livewire;

use App\Service\AlternativeServiceInterface;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditAlterantive extends Component
{

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $kode;
    
    public $id;

    public function mount(AlternativeServiceInterface $alternativeService, $id) {
        $alternative = $alternativeService->getAlternativeById($id);
        $this->fill($alternative->only(['id','name','kode']));
    }


   

    public function editBobot(AlternativeServiceInterface $alternativeService) {
            $this->validate();
            $alternativeService->updateAlternative($this->id, [
                'kode' => $this->kode,
                'name' => $this->name
            ]);
            $this->dispatch('alert-success',message : "success Edit Alternative "); 
    }
    public function render()
    {
        return view('livewire.edit-alterantive');
    }
}
