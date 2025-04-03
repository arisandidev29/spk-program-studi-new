<?php

namespace App\Livewire;

use App\Models\Bobot;
use App\Models\Kriteria;
use App\Models\PilihanJawaban;
use App\Service\AlternativeServiceInterface;
use App\Service\KriteriaSeriveInterface;
use Livewire\Component;

class KriteriaList extends Component
{
    public $kriterias;

    public $alterantives;

    public function mount(KriteriaSeriveInterface $kriteriaService, AlternativeServiceInterface $alternativeService) {
        $this->kriterias = $kriteriaService->getAllKriteria();
        $this->alterantives = $alternativeService->getAllAlternative();
        
    }
    
    

    public function deleteKriteria(KriteriaSeriveInterface $kriteriaService, AlternativeServiceInterface $alternativeService, $id) {
        // $kriteriaService->deleteKriteria($id);
        Kriteria::find($id)->delete();
        $this->kriterias = $kriteriaService->getAllKriteria();
        $this->alterantives = $alternativeService->getAllAlternative();
        $this->dispatch('refresh-pilihan');
        $this->dispatch('alert-success', message : 'Success Delete Kriteria !');
        $this->dispatch('modaldelete-close');
    }
    public function render()
    {
        return view('livewire.kriteria-list');
    }
}
