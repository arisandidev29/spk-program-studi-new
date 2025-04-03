<?php
namespace App\Service;

use App\Models\Alternative;

class AlternativeService implements AlternativeServiceInterface {
    public function createAlternative($data) {
        return Alternative::create($data);
    }

    public function updateAlternative($id, $data) {
        $alternative = Alternative::findOrFail($id);
        $alternative->update($data);
        return $alternative;
    }

    public function deleteAlternative($id) {
        $alternative = Alternative::findOrFail($id);
        $alternative->delete();
        return $alternative;
    }

    public function getAllAlternative() {
        return Alternative::all();
    }

    public function getAlternativeById($id) {
        return Alternative::findOrFail($id);
    }

    public function getAlternativeByPegination($pegination) {
        return Alternative::simplePaginate($pegination);
    }
}


?>