<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use App\Models\PilihanJawaban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriteria = Kriteria::factory(1)->create();

        PilihanJawaban::create([
            'name' => 'Sangat Baik',
            'nilai' => 5,
            'id_kriteria' => $kriteria->first()->id
        ]);
        PilihanJawaban::create([
            'name' => 'Baik',
            'nilai' => 4,
            'id_kriteria' => $kriteria->first()->id
        ]);
        PilihanJawaban::create([
            'name' => 'Cukup',
            'nilai' => 3,
            'id_kriteria' => $kriteria->first()->id
        ]);
        PilihanJawaban::create([
            'name' => 'Kurang',
            'nilai' => 2,
            'id_kriteria' => $kriteria->first()->id
        ]);
        PilihanJawaban::create([
            'name' => 'Sangat Kurang',
            'nilai' => 1,
            'id_kriteria' => $kriteria->first()->id
        ]);
    }
}
