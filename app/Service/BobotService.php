<?php

namespace App\Service;

use App\Models\Bobot;

class BobotService implements BobotServiceInterface {
    public function getAllBobots() {
        return Bobot::all();
    }


    public function getBobotById($id) {
        return Bobot::findOrFail($id);
    }

    public function getBobotsByPagination(int $pagination) {
        return Bobot::simplePaginate($pagination);
    }

    public function createBobot(array $data) {
        $bobot = Bobot::create($data);
        $this->normalizeBobots();
        return $bobot;
    }

    public function updateBobot($id, array $data) {
        $bobot = Bobot::findOrFail($id);
        $bobot->update($data);
        $this->normalizeBobots();
        return $bobot;
    }

    public function deleteBobot($id) {
        $bobot = Bobot::findOrFail($id);
        $bobot->delete();
        $this->normalizeBobots();
        return $bobot;
    }

    public function normalizeBobots() {
        $bobots = Bobot::all();
        $totalBobot = $bobots->sum('bobot');

        foreach($bobots as $bobot) {
            $bobot->normalisasi = $totalBobot ?  round($bobot->bobot / $totalBobot, 2)  : 0;
            $bobot->save();
        }
    }
}


?>