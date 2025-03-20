<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Question::class)
            ->assertStatus(200);
    }
}
