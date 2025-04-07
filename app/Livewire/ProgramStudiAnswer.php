<?php

namespace App\Livewire;

use App\Models\Kriteria;
use App\Service\KriteriaSeriveInterface;
use App\Service\PilihanJawabanServiceInterfaces;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Auth;
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

    public $pilihanSelected;

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

        $pilihan = $kriteriaService->getKriteriaById($this->kriteria_id)->pilihanJawaban->map(function ($jawaban) {
            return (object)[
                'id' => $jawaban->id,
                'name' => $jawaban->name,
                'nilai' => $jawaban->nilai,
                'kriteria' => $jawaban->kriteria,
                'program_studi' => $jawaban->program_studi,
                'description' => $jawaban->description,
                'kriteria_id' => $jawaban->kriteria_id,
                'is_selected' => false,

            ];
        });


        if (Auth::user()->UserJawaban()->where('kriteria_id', $this->kriteria_id)->exists()) {
            $userJawaban = Auth::user()->UserJawaban()
                                ->where('kriteria_id', $this->kriteria_id)
                                ->where('alternative_id', $this->programStudi->id)
                                ->first();

            $pilihan= $pilihan->map(function ($item) use ($userJawaban) {
                if ($item->id == $userJawaban->pilihan_jawaban_id) {
                    $item->is_selected = true;
                }
                $this->selected = $userJawaban->pilihan_jawaban_id;
                return $item;
            });


        }

        $this->pilihans = $pilihan->all() ?? [];
    }

    public function setSelectedValue(string $value)
    {
        $this->selected = $value;
    }

    #[On('send')]
    public function validateRadion()
    {
        try {
            $this->validate();
            $this->dispatch(
                'validation-passed',
                programStudi: $this->programStudi,
                pilihanJawaban: $this->selected
            )->to('question');
        } catch (ValidationException $e) {
            throw $e;
        }
    }

    public function render()
    {
        return view('livewire.program-studi-answer');
    }
}
