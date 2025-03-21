<?php

namespace Tests\Feature;

use App\Service\TokenServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class ProviderTest extends TestCase
{
    public $tokenService;
    public function setUp(): void {
       parent::setUp();
       $this->tokenService = App::make(TokenServiceInterface::class); 
    }
    public function test_true(): void
    {
        dump($this->tokenService->getToken());
        self::assertNotNull($this->tokenService);
    }
}
