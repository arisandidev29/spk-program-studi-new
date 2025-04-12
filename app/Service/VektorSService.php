<?php
namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class VektorSService implements VektorSServiceInterface {
    public function getAllVektorSByUser($user) {
        $user = $user ?? Auth::user();
        return $user->VektorS->all();
    }

    public function createVektorS($user = null) {
        $user = $user ?? Auth::user();
        $VektorResult =  $this->calculateVektorS($user);
        foreach($VektorResult as  $index => $vektor) {
            $user->VektorS()->create([
                'alternative_id' => $index,
                'vektor_s' => $vektor
            ]);
        }


    }

    public function calculateVektorS($user = null) {
        $user = $user ?? Auth::user();
        $vektor =  $user->UserJawaban()->get()->groupBy('alternative_id')->map(function($gruop) {

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