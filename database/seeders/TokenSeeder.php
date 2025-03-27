<?php

namespace Database\Seeders;

use App\Service\TokenServiceInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class TokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tokenService = App::make(TokenServiceInterface::class);

        $tokenService->generateToken();
    }
}
