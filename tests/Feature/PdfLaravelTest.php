<?php

namespace Tests\Feature;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PdfLaravelTest extends TestCase
{
    public function testPdfLaravel()
    {
        Pdf::loadHTML('<h1>hallo</h1>')->save('test.pdf','public');
    }
}
