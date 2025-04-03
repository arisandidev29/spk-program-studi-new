<?php

namespace App\Livewire;

use App\Service\BobotServiceInterface;
use App\Service\KriteriaSeriveInterface;
use App\Service\PilihanJawabanServiceInterfaces;
use Livewire\Component;

class EditKriteria extends Component
{

    public $id;

    public $kriteria ;

    public $desc;

    public $note;

    public $bobot;

    public $kategori;

    public $pilihans;

    public $bobotOptions;

    public $defaultValuePiilhan = 90;

        protected function rules() {
        $rule = [
            "kriteria" => 'required',
            "desc" => 'required',
            "bobot.id" => 'required',
            "kategori" => 'required'
        ];

        foreach ($this->pilihans as $key => $value) {
            $rule["pilihans.{$key}.name"] = 'required|string|max:255';
        }


        return $rule;

    }

    protected function validationAttributes() {
        $rule = [
            'desc' => 'deskription',
            'bobot.id' => 'bobot',
        ];
        foreach ($this->pilihans as $key => $value) {
            $rule["pilihans.{$key}.name"] = 'pilhan ' .  $key + 1; 
        }

        return $rule;

    }



    public function mount(KriteriaSeriveInterface $kriteriaService, BobotServiceInterface $bobotService, $id)
    {
        $this->id = $id;
        $kriteria = $kriteriaService->getKriteriaById($this->id);
        $this->fill($kriteria->only('kriteria','desc','note','kategori'));
        $this->bobot = $kriteria->bobot->toArray();
        $this->pilihans = $kriteria->PilihanJawaban->toArray();
        $this->bobotOptions = $bobotService->getAllBobots();

    }

    public function update(KriteriaSeriveInterface $kriteriaService  ) {
        $this->validate();
        $kriteria = $kriteriaService->updateKriteria($this->id, [
            'kriteria' => $this->kriteria,
            'desc' => $this->desc,
            'note' => $this->note,
            'kategori' => $this->kategori,
            'bobot_id' => $this->bobot['id']
        ]);


        foreach($this->pilihans as $data){
            $pilihan = $kriteria->PilihanJawaban->find($data['id']);
            if($pilihan) {
                $pilihan->update([
                    'name' => $data['name'],
                ]);
            }
        }

        $this->dispatch('alert-success', message : "success Edit Kriteria");


    }

    public function render()
    {
        return view('livewire.edit-kriteria');
    }
}
