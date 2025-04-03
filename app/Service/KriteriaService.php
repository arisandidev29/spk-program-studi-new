<?php
namespace App\Service;

use App\Models\Kriteria;

class KriteriaService implements KriteriaSeriveInterface {
    public function createKriteria($data) {
        $kriteria = Kriteria::create($data);
        return $kriteria;
    }

    public function getAllKriteria() {
        return Kriteria::all();
    }

    public function getKriteriaById($id) {
        return Kriteria::findOrFail($id);
    }

    public function updateKriteria($id, $data) {
        $kriteria = $this->getKriteriaById($id);
        $kriteria->update($data);
        return $kriteria;
    }

    public function deleteKriteria($id) {
        $kriteria = $this->getKriteriaById($id);
        $kriteria->delete();

        return $kriteria;
    }
}


?>