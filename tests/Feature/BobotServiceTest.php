<?php

namespace Tests\Feature;

use App\Models\Bobot;
use App\Service\BobotServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BobotServiceTest extends TestCase
{
    use RefreshDatabase;

    protected $bobotService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->bobotService = $this->app->make(BobotServiceInterface::class);
    }

    public function testService()
    {
        self::assertNotNull($this->bobotService);
    }

    public function testCanCreateBobot()
    {
        $data = [
            'name' => 'Bobot 1',
            'keterangan' => 'Keterangan 1',
            'bobot' => 10,
        ];

        $bobot = $this->bobotService->createBobot($data);

        $this->assertDatabaseHas('bobots', [
            'name' => 'Bobot 1',
            'keterangan' => 'Keterangan 1',
            'bobot' => 10,
            'normalisasi' => 1.0
        ]);

        $this->assertEquals(1, Bobot::count());
    }

    public function testCanUpdateBobot() {
        $bobot = Bobot::factory()->create([
            'name' => 'bobot 1',
            'keterangan' => 'penting',
            'bobot' => 10
        ]);

        $newBobot = [
            'name' => 'w1',
            'keterangan' => 'penting sekali',
            'bobot' => 20
        ];

        $updatedBobot = $this->bobotService->updateBobot($bobot->id,$newBobot);

        $this->assertDatabaseHas('bobots',[
            'name' => 'w1',
            'keterangan' => 'penting sekali',
            'bobot' => 20
        ]);


        $this->assertEquals(1, Bobot::count());

        
    }

     /** @test */
     public function it_can_delete_a_bobot()
     {
         $bobot = Bobot::factory()->create([
             'name' => 'Bobot 1',
             'keterangan' => 'Keterangan 1',
             'bobot' => 10,
         ]);
 
         $this->bobotService->deleteBobot($bobot->id);
 
         $this->assertDatabaseMissing('bobots', [
             'id' => $bobot->id,
         ]);
 
         $this->assertEquals(0, Bobot::count());
     }


    /** @test */
    public function it_normalizes_bobots_after_create_update_and_delete()
    {
        $bobot1 = $this->bobotService->createBobot([
            'name' => 'Bobot 1',
            'keterangan' => 'Keterangan 1',
            'bobot' => 10,
        ]);

        $bobot2 = $this->bobotService->createBobot([
            'name' => 'Bobot 2',
            'keterangan' => 'Keterangan 2',
            'bobot' => 20,
        ]);

        $this->assertEquals(0.3333, round($bobot1->fresh()->normalisasi, 4));
        $this->assertEquals(0.6667, round($bobot2->fresh()->normalisasi, 4));

        $updatedBobot = $this->bobotService->updateBobot($bobot1->id, [
            'name' => 'Bobot 1 Updated',
            'keterangan' => 'Keterangan 1 Updated',
            'bobot' => 30,
        ]);

        $this->assertEquals(0.6, round($updatedBobot->fresh()->normalisasi, 1));
        $this->assertEquals(0.4, round($bobot2->fresh()->normalisasi, 1));

        $this->bobotService->deleteBobot($bobot2->id);

        $this->assertEquals(1, $updatedBobot->fresh()->normalisasi);
    }


}
