<?php

namespace App\Livewire;

use App\Service\AlternativeService;
use App\Service\AlternativeServiceInterface;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AlternativeTable extends Component
{
    use WithPagination;


    public function deleteAlternative( AlternativeServiceInterface $alternativeService,$id) {
        $alternativeService->deleteAlternative($id);
        $this->dispatch('modaldelete-close');
        $this->dispatch('alert-success', message : "Success Delete Alternative !");
    }

    #[On('refresh-alterantive')]
    public function refreshAlternative() {
        $this->resetPage();
    }

    public function render(AlternativeServiceInterface $alternativeService)
    {

        $alternatives = $alternativeService->getAlternativeByPegination(5);
        return view('livewire.alternative-table',[
            'alternatives' => $alternatives
        ]);
    }
}
