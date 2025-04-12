<?php
namespace App\Service;

use Illuminate\Support\Facades\Auth;

class RekomendasiService implements RekomendasiServiceInterface {
    private $serviceVektor;
    private $hasilRekomendasiService;

    public function __construct(VektorSServiceInterface$serviceVektor, HasilRekomendasiServiceInterface $hasilRekomendasiService) {
        $this->serviceVektor = $serviceVektor;
        $this->hasilRekomendasiService = $hasilRekomendasiService;
    }

    public function createRekomendasi($user = null) {
        $this->serviceVektor->createVektorS($user);
       $vektorV = $this->serviceVektor->getAllVektorSByUser($user); 
       $rekomendasi = $this->hasilRekomendasiService->createHasilRekomendasi($vektorV,$user);
       return $rekomendasi;
    }

    public function getRekomendasi($user = null) {
        $user = $user ?? Auth::id();
        return $this->hasilRekomendasiService->getHasilRekomendasi($user);
    }

    public function deleteRekomendasi() {
        $this->hasilRekomendasiService->deleteHasilRekomendasi(Auth::id());;
        $this->serviceVektor->deleteVektorS(Auth::id());
        Auth::user()->UserJawaban()->delete(); 
    }
}

?>