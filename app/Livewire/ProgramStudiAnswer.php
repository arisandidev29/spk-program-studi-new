<?php

namespace App\Livewire;

use App\Models\Kriteria;
use App\Service\KriteriaSeriveInterface;
use App\Service\PilihanJawabanServiceInterfaces;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProgramStudiAnswer extends Component
{
    public $programStudi;
    public $description;

    public $kriteria_id;

    public $pilihans;

    #[Validate('required', message: 'Wajib di pililh salah satu !')]
    public $selected;


    public function mount(KriteriaSeriveInterface $kriteriaService)
    {
        $this->loadPilhanJawaban($kriteriaService);
    }


    #[On('refresh-pilihan')]
    public function refreshPilihanJawaban(KriteriaSeriveInterface $kriteriaService)
    {
        $this->loadPilhanJawaban($kriteriaService);
    }


    public function loadPilhanJawaban(KriteriaSeriveInterface $kriteriaService)
    {
        if (!$this->kriteria_id) {
            $this->pilihans = [];
            return;
        }

        try {
            $kriteria = $kriteriaService->getKriteriaById($this->kriteria_id)->pilihanJawaban;
            $this->pilihans = $kriteria ?? [];
            Log::info("loadend pilihan for id kriteria {$this->kriteria_id} => " . json_encode($this->pilihans));
        } catch (\Exception $e) {
            $this->pilihans = [];
            Log::info('no pilhan loaded for kriteira {$this->kriteria_id}');
        }
    }

    public function setSelectedValue(string $value)
    {
        $this->selected = $value;
    }

    #[On('send')]
    public function validateRadion()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.program-studi-answer');
    }
}
