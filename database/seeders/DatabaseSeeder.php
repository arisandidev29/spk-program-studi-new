<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
        User::factory()->create([
            'name' => 'arisandi',
            'email' => 'arisandi@gmail.com',
            'role' => 'users'
        ]);

        User::factory()->create([
            'name' => 'admin',
            'role' => 'admin'
        ]);

    }
}
