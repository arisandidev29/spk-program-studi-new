<?php

namespace Database\Seeders;

use App\Models\Alternative;
use App\Models\Kriteria;
use App\Models\PilihanJawaban;
use App\Models\User;
use App\Service\HasilRekomendasiServiceInterface;
use App\Service\RekomendasiService;
use App\Service\VektorSServiceInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'name' => 'andi',
            'email' => 'andi@gmail.com',
            'role' => 'users'
        ]);
        $this->createPilihanJawaban($user1);

     
        $user2 = User::factory()->create([
                'name' => 'ari',
                'email' => 'ari@gmail.com',
                'role' => 'users'
            ]);

        $this->createPilihanJawaban($user2);

        $user3 =     User::factory()->create([
                'name' => 'budi',
                'email' => 'budi@gmail.com',
                'role' => 'users'
            ]);


        $this->createPilihanJawaban($user3);


        $user4 =   User::factory()->create([
                'name' => 'kader',
                'email' => 'kader@gmail.com',
                'role' => 'users'
            ]);

        $this->createPilihanJawaban($user4);
    }

    public function createPilihanJawaban($user) {
    Kriteria::all()->each(function ($kriteria) use ($user) {
        $jawabanData = Alternative::all()->map(function ($alternative) use ($kriteria) {
            return [
                'kriteria_id' => $kriteria->id,
                'alternative_id' => $alternative->id,
                'pilihan_jawaban_id' => PilihanJawaban::where('id_kriteria', $kriteria->id)->inRandomOrder()->first()->id
            ];
        });

        $user->UserJawaban()->createMany($jawabanData);
    });

    $rekomendasiService = App::make(RekomendasiService::class);
    $rekomendasiService->createRekomendasi($user);
}
}
