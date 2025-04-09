<?php

namespace Tests\Feature;

use App\Models\User;
use App\Service\HasilRekomendasiServiceInterface;
use App\Service\RekomendasiServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RekomendasiServiceTest extends TestCase
{
    protected $rekomendasiService;
    public function setUp(): void {
        parent::setUp();
        $this->rekomendasiService = $this->app->make(RekomendasiServiceInterface::class);
    }

    public function testNotNull(): void {
        self::assertNotNull($this->rekomendasiService);
    }

    public function testCreateRekomendasi(): void {
        $user = User::where('name', 'arisandi')->first();
        $this->actingAs($user);
        $rekomendasi = $this->rekomendasiService->createRekomendasi();
        self::assertNotNull($rekomendasi);
    }

    public function testDeleteRekomdasi() {
        $user = User::where('name', 'arisandi')->first();
        $this->actingAs($user);
        $rekomendasi = $this->rekomendasiService->deleteRekomendasi();
    }
}
