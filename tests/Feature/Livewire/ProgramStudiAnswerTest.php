<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ProgramStudiAnswer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProgramStudiAnswerTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ProgramStudiAnswer::class)
            ->assertStatus(200);
    }
}
