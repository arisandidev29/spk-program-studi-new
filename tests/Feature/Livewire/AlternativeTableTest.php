<?php

namespace Tests\Feature\Livewire;

use App\Livewire\AlternativeTable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AlternativeTableTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(AlternativeTable::class)
            ->assertStatus(200);
    }
}
