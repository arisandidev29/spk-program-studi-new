<?php

namespace Database\Seeders;

use App\Models\Bobot;
use App\Service\BobotServiceInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class BobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bobots = [
            [
                'name' => 'w1',
                'keterangan' => 'penting sekali',
                'bobot' => 60
            ],
            [
                'name' => 'w2',
                'keterangan' => 'penting',
                'bobot' => 50
            ],

        ];

        foreach($bobots as $bobot) {
            Bobot::create($bobot);
        }

        $bobotservice = App::make(BobotServiceInterface::class); 

        $bobotservice->normalizeBobots();
    }
}
