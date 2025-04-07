<?php

namespace Tests\Feature;

use App\Models\Alternative;
use App\Models\Kriteria;
use App\Models\User;
use App\Models\UserJawaban;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserJawabanTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreateUserJawaban(): void
    {
        $user = User::where('name','arisandi')->first();
        $this->actingAs($user);

        $kriteria = Kriteria::first();

        $alternative = Alternative::first();
        $pilihanJawaban = $kriteria->pilihanJawaban->first();

        UserJawaban::create([
            'user_id' => $user->id,
            'kriteria_id' => $kriteria->id,
            'alternative_id' => $alternative->id,
            'pilihan_jawaban_id' => $pilihanJawaban->id,
        ]);


    //     $this->assertDatabaseHas('user_jawabans', [
    //         'user_id' => 1,
    //         'kriteria_id' => 'some-uuid',
    //         'alternative_id' => 1,
    //         'pilihan_jawaban_id' => 1,
    //     ]);
    }
}
