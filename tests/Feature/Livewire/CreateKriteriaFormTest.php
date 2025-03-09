<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateKriteriaForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateKriteriaFormTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateKriteriaForm::class)
            ->assertStatus(200);
    }
}
