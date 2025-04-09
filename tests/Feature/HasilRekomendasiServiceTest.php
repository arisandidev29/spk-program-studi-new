<?php

namespace Tests\Feature;

use App\Models\User;
use App\Service\HasilRekomendasiServiceInterface;
use App\Service\VektorSServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class HasilRekomendasiServiceTest extends TestCase
{
    protected $HasilRekomendasiService;

    public function setUp(): void
    {
        parent::setUp();

        $this->HasilRekomendasiService = $this->app->make(HasilRekomendasiServiceInterface::class);
    }
    public function testNotNull(): void
    {
        self::assertNotNull($this->HasilRekomendasiService);
    }

    public function testCreateHasilRekomendasi(): void
    {
        $user = User::where('name', 'arisandi')->first();

        $this->actingAs($user);

        $VektorSService = App::make(VektorSServiceInterface::class);

        $userVektorS = $VektorSService->getAllVektorSByUser();

        $this->HasilRekomendasiService->createHasilRekomendasi(collect($userVektorS));
    }

    public function testGetHasilRekomdasi() {
        $user = User::where('name', 'arisandi')->first();
        $this->actingAs($user);
        $hasilRekomendasi = $this->HasilRekomendasiService->getHasilRekomendasi(Auth::id());
        self::assertNotNull($hasilRekomendasi);
        dd($hasilRekomendasi);
    }
}
