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

    public function createRekomendasi() {
        $this->serviceVektor->createVektorS();
       $vektorV = $this->serviceVektor->getAllVektorSByUser(); 
       $rekomendasi = $this->hasilRekomendasiService->createHasilRekomendasi($vektorV);
       return $rekomendasi;
    }

    public function getRekomendasi() {
        return $this->hasilRekomendasiService->getHasilRekomendasi(Auth::id());
    }

    public function deleteRekomendasi() {
        $this->hasilRekomendasiService->deleteHasilRekomendasi(Auth::id());;
        $this->serviceVektor->deleteVektorS(Auth::id());
        Auth::user()->UserJawaban()->delete(); 
    }
}

?>