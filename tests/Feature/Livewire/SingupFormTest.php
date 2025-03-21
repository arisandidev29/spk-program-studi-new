<?php

namespace Tests\Feature\Livewire;

use App\Livewire\SingupForm;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class SingupFormTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(SingupForm::class)
            ->assertStatus(200);
    }

    public function test_wrong_token() {
        Storage::fake('public');
        Livewire::test(SingupForm::class)
                ->set('username','sandi')
                ->set('email','sandi@gmail.com')
                ->set('password','arisandi123@')
                ->set('password_confirm','arisandi123@')
                ->set('token','5544')
                ->set('profile_pic',UploadedFile::fake()->image('avatar.jpg'))
                ->call('register')
                ->assertHasErrors(['token']);
    }

    public function test_register_user() {
        // $this->seed([DatabaseSeeder::class])

        Storage::fake('public');
        Livewire::test(SingupForm::class)
                ->set('username','sandi')
                ->set('email','sandi@gmail.com')
                ->set('password','arisandi123@')
                ->set('password_confirm','arisandi123@')
                ->set('token','yJPuJU')
                ->set('profile_pic',UploadedFile::fake()->image('avatar.jpg'))
                ->call('register')
                ->assertRedirect('/login');

                $this->assertDatabaseHas('users', [
                    'name' => 'sandi',
                    'email' => 'sandi@gmail.com',
                ]);
        
                // Storage::disk('public')->as
                Storage::disk('public')->assertExists('users/sandi/avatar.jpg');
    }

    public function test_register_user_exist_username_and_email() {
        $this->seed([DatabaseSeeder::class]);

        Storage::fake('public');

        
        Livewire::test(SingupForm::class)
                ->set('username','arisandi')
                ->set('email','arisandi@gmail.com')
                ->set('password','arisandi123@')
                ->set('password_confirm','arisandi123@')
                ->set('token','yJPuJU')
                ->set('profile_pic',UploadedFile::fake()->image('avatar.jpg'))
                ->call('register')
                ->assertHasErrors(['username','email']);

    }

    public function test_user_registration() {
        Livewire::test(SingupForm::class)
                ->set('username','arisandi')
                ->set('email','patanib126@evluence.com')
                ->set('password','arisandi123@')
                ->set('password_confirm','arisandi123@')
                ->set('token','yJPuJU')
                ->set('profile_pic',UploadedFile::fake()->image('avatar.jpg'))
                ->call('register');
    }
}
