<?php

namespace App\Livewire;

use App\Service\BobotServiceInterface;
use App\Service\KriteriaSeriveInterface;
use App\Service\PilihanJawabanInterfaces;
use App\Service\PilihanJawabanServiceInterfaces;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateKriteriaForm extends Component
{

    public  $pilihans = [
        [
            'text' => '',
            'nilai' => '90'
        ],
        [
            'text' => '',
            'nilai' => '80'
        ],
        [
            'text' => '',
            'nilai' => '70'
        ],
        [
            'text' => '',
            'nilai' => '60'
        ],
        [
            'text' => '',
            'nilai' => '50'
        ],

    ];



    public $kriteria ;

    public $desc;

    public $note;

    public $bobot;

    public $kategori;

    public $defaultValuePiilhan = 90;


    // bobot dropdown
    public $bobots;



    protected function rules() {
        $rule = [
            "kriteria" => 'required',
            "desc" => 'required',
            "bobot" => 'required',
            "kategori" => 'required'
        ];

        foreach ($this->pilihans as $key => $value) {
            $rule["pilihans.{$key}.text"] = 'required|string|max:255';
        }


        return $rule;

    }

    protected function validationAttributes() {
        $rule = [
            'desc' => 'deskription',
        ];
        foreach ($this->pilihans as $key => $value) {
            $rule["pilihans.{$key}.text"] = 'pilhan ' .  $key + 1; 
        }

        return $rule;

    }


    public function mount(BobotServiceInterface $bobotService) {
        $this->bobots = $bobotService->getAllBobots();
    }


    public function addPilihan() {
        $lastPilhan = end($this->pilihans);
        $lastNilai = $lastPilhan['nilai'];

        $newNilai = max(10, $lastNilai - 5);
        $this->pilihans[] = [
            'text' => '',
            'nilai' => $newNilai
        ];
    }

    public function removePilihan() {
        $this->pilihans = array_slice($this->pilihans, 0, -1);
    }


    public function save(KriteriaSeriveInterface $KriteriaService, PilihanJawabanServiceInterfaces $PilihanJawabanService) {
        $this->validate();
        $kriteria = $KriteriaService->createKriteria([
            'kriteria' => $this->kriteria,
            'desc' => $this->desc,
            'note' => $this->note,
            'kategori' => $this->kategori,
            'bobot_id' => $this->bobot
        ]);

        foreach($this->pilihans as $pilihan){
            $PilihanJawabanService->createPilihan([
                'name' => $pilihan['text'],
                'nilai' => $pilihan['nilai'],
                'id_kriteria' => $kriteria->id
            ]);
        }

        $this->dispatch('alert-success', message: 'Success buat kriteria !');




    }


    public function render()
    {
        return view('livewire.create-kriteria-form');
    }
}
