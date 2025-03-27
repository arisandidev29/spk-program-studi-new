<?php

namespace App\Livewire;

use App\Service\TokenService;
use App\Service\TokenServiceInterface;
use Livewire\Component;

class RegisterToken extends Component
{
    public $token;

    public function mount(TokenServiceInterface $tokenService) {
        $this->token = $tokenService->getToken();
    }
    public function refreshToken(TokenServiceInterface $tokenService) {
       $tokenService->generateToken(); 
       $this->token = $tokenService->getToken();
       $this->dispatch('alertregistertoken-success',message : 'Sucess refresh Token');
    }
    public function render()
    {
        return view('livewire.register-token');
    }
}
