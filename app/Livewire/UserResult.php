<?php

namespace App\Livewire;

use App\Service\RekomendasiService;
use App\Service\RekomendasiServiceInterface;
use Livewire\Component;

class UserResult extends Component
{

    public $rekomendasi;

    public function mount(RekomendasiService $rekomendasiService) {
       $this->rekomendasi = $rekomendasiService->getRekomendasi()->first();
    }

    public function UlangiPilihan(RekomendasiServiceInterface $rekomendasiService) {
       $rekomendasiService->deleteRekomendasi();
         return redirect()->to('/dashboard'); 
    }

    public function render()
    {
        return view('livewire.user-result');
    }
}
