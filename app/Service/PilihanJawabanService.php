<?php
namespace App\Service;

use App\Models\PilihanJawaban;

class PilihanJawabanService implements PilihanJawabanServiceInterfaces{
    public function createPilihan($data) {
        return PilihanJawaban::create($data);
    }

    public function updatePilihan($id, $data) {
        $pilihan = PilihanJawaban::findOrFail($id);
        $pilihan->update($data);
        return $pilihan;
    }

    public function deletePilihan($id)  {
       $pilihan = PilihanJawaban::findOrFail($id); 
       $pilihan->deleted();
       return $pilihan;
    }
}



?>