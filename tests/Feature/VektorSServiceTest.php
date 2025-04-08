<?php

namespace Tests\Feature;

use App\Models\User;
use App\Service\VektorSServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class VektorSServiceTest extends TestCase
{
    protected $VektorService;

    public function setUp(): void {
        parent::setUp();
        $this->VektorService = App::make(VektorSServiceInterface::class);
    }
    
    public function testCalculateVektorS() {
        $user = User::where('name','arisandi')->first();
        $this->actingAs($user);
        $vektor = $this->VektorService->createVektorS();
        // $this->VektorService->deleteVektorS();
        dd($vektor);
    }

}
