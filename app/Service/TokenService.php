<?php
namespace App\Service;

use App\Models\Token;
use Illuminate\Support\Str;

class TokenService implements TokenServiceInterface {
    public function generateToken(): string {
        $token = Token::create([ 'token' => Str::random(6)]);
        return $token;
    }

    public function validateToken($userToken) :bool {
        return $userToken === Token::latest()->first()->token;
    }

    public function getToken():string {
        return Token::latest()->first()->token;
    }
}


?>