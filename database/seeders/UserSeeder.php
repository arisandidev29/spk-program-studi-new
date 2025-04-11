<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'andi',
        //     'email' => 'andi@gmail.com',
        //     'role' => 'users'
        // ]);
        // User::factory()->create([
        //     'name' => 'ari',
        //     'email' => 'ari@gmail.com',
        //     'role' => 'users'
        // ]);
        // User::factory()->create([
        //     'name' => 'budi',
        //     'email' => 'budi@gmail.com',
        //     'role' => 'users'
        // ]);
        User::factory()->create([
            'name' => 'kader',
            'email' => 'kader@gmail.com',
            'role' => 'users'
        ]);
    }
}
