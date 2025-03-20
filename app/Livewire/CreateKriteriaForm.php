<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateKriteriaForm extends Component
{

    public $pilihan = [
        'pilihan 1' => '',
        'pilihan 2' => '',
        'pilihan 3' => '' ,
        'pilihan 4' => '', 
        'pilihan 5' => ''
    ];

    // #[Validate('required')]
    public $kriteria ;

    // #[Validate('required')]
    public $pertanyaan;

    // #[Validate('required')]
    public $bobot;

    // #[Validate('required')]
    public $kategori;


    protected function rules() {
        $rule = [
            "kriteria" => 'required',
            "pertanyaan" => 'required',
            "bobot" => 'required',
            "kategori" => 'required'
        ];

        foreach ($this->pilihan as $key => $value) {
            $rule["pilihan.{$key}"] = 'required|string|max:255'; // Aturan contoh
        }


        return $rule;

    }

    protected function validationAttributes() {
        $rule = [];
        foreach ($this->pilihan as $key => $value) {
            $rule["pilihan.{$key}"] = $key; 
        }

        return $rule;

    }

    public function update() {
        dump($this->pilihan);
    }


    public function addPilihan() {
        $this->pilihan["pilihan " . (count($this->pilihan) + 1)] =   '';
    }

    public function removePilihan() {
        $this->pilihan = array_slice($this->pilihan, 0, -1);
    }


    public function save() {
        $this->validate();
    }


    public function render()
    {
        return view('livewire.create-kriteria-form');
    }
}
