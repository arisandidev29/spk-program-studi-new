<?php

namespace App\Livewire;

use Livewire\Component;

class ExportUser extends Component
{
    public function exportAllUser() {
        $this->dispatch('showmodalpdf');
        $this->dispatch('exportPdfAllUser');
    }
    
    public function exportUserOnlyThisYear(){
        $this->dispatch('showmodalpdf');
        $this->dispatch('exportPdfOnlyThisYear');
    }
    
    public function exortUserOnlyHasChoise() {
        $this->dispatch('showmodalpdf');
        $this->dispatch('exportPdfUserOnlyHasChoise');
        
    }


    public function render()
    {
        return view('livewire.export-user');
    }
}
