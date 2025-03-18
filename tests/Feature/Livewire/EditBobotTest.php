<?php

namespace Tests\Feature\Livewire;

use App\Livewire\EditBobot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditBobotTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EditBobot::class)
            ->assertStatus(200);
    }
}
