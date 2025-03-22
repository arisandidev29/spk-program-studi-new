<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ProfileForm;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileFormTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {

        $user = User::factory()->create();

        Livewire::actingAs($user)->test(ProfileForm::class)
            ->assertStatus(200);
    }

    /** @test */
    public function edit_button_is_disabled_initially()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(ProfileForm::class)
            ->assertSee('disabled');
    }

    /** @test */
    public function edit_button_is_enabled_when_input_changes()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(ProfileForm::class)
            ->set('name', 'New Name')
            ->assertDontSee('disabled');
    }


    /** @test */
    public function edit_button_is_enabled_when_image_changes()
    {
        $user = User::factory()->create();

        Storage::fake('public');

        Livewire::actingAs($user)
            ->test(ProfileForm::class)
            ->set('profile_pic', UploadedFile::fake()->image('avatar.jpg'))
            ->assertNotSee('disabled');
    }
}
