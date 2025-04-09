<?php
namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VektorSService implements VektorSServiceInterface {
    public function getAllVektorSByUser() {
        return Auth::user()->VektorS->all();
    }

    public function createVektorS() {
        $VektorResult =  $this->calculateVektorS();
        foreach($VektorResult as  $index => $vektor) {
            Auth::user()->VektorS()->create([
                'alternative_id' => $index,
                'vektor_s' => $vektor
            ]);
        }

    }

    public function calculateVektorS() {
        $vektor =  Auth::user()->UserJawaban()->get()->groupBy('alternative_id')->map(function($gruop) {

              $totalNilai = $gruop->sum(function ($item) {
                
                return round(pow($item->pilihanJawaban->nilai,$item->kriteria->bobot->normalisasi),2);
              });
              return $totalNilai;
        });
        return $vektor;
    }

    public function deleteVektorS($user_id) {
        $vektor = User::find($user_id)->VektorS()->delete();
        return $vektor;
    }
}



?>