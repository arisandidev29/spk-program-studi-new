<?php

namespace App\Livewire;

use App\Service\HasilRekomendasiServiceInterface;
use Livewire\Component;

class HasilPerhitungan extends Component
{
    public $user;
    public $hasilRekomendasi;

    public function exportUserResult() {
        $this->dispatch("showmodalpdf");
        $this->dispatch("exportPdfUserResult", $this->user);
    }

    public function mount(HasilRekomendasiServiceInterface $hasilRekomendasiService) {
        $this->hasilRekomendasi = $hasilRekomendasiService->getHasilRekomendasi($this->user->id);

    }
    public function render()
    {
        return view('livewire.hasil-perhitungan');
    }
}
