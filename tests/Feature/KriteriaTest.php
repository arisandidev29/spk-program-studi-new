<?php

namespace Tests\Feature;

use App\Models\Kriteria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KriteriaTest extends TestCase
{
    public function test_example(): void
    {
        $kriteria = Kriteria::first()->bobot();
        dd($kriteria);
    }
}
