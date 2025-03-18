<?php

namespace Tests\Feature\Livewire;

use App\Livewire\BobotTable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class BobotTableTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(BobotTable::class)
            ->assertStatus(200);
    }
}
