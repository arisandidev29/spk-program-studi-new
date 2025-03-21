<?php

namespace Tests\Feature;

use App\Service\TokenService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TokenTest extends TestCase
{
    public function test_generate_token(): void
    {
        
        $tokenService = new TokenService();

        $tokenService->generateToken();

        $this->assertEquals(6,strlen($tokenService->getToken()));
        $this->assertDatabaseHas('tokens',['token' => $tokenService->getToken()]);
    }

    public function test_validate_token() {
        $tokenServie = new TokenService();

        $this->assertEquals('yJPuJU',$tokenServie->getToken());
    }
}
