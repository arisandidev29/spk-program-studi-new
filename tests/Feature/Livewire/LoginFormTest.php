<?php

namespace Tests\Feature\Livewire;

use App\Livewire\LoginForm;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LoginFormTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(LoginForm::class)
            ->assertStatus(200);
    }

    public function test_login_user_success() {
        $this->seed([DatabaseSeeder::class]);
        Livewire::test(LoginForm::class)
            ->set('username','Test User')
            ->set('password','password')
            ->call('login')
            ->assertRedirectContains("/dashboard");
    }
    public function test_login_admin_success() {
        $this->seed([DatabaseSeeder::class]);
        Livewire::test(LoginForm::class)
            ->set('username','admin')
            ->set('password','password')
            ->call('login')
            ->assertRedirect('/admin/dashboard');
    }
    public function test_login_failed() {
        $this->seed([DatabaseSeeder::class]);
        Livewire::test(LoginForm::class)
            ->set('username','wrong')
            ->set('password','wrong')
            ->call('login')
            ->assertSeeText('username atau password salah');
    }


    public function testvalidation_required() {
        Livewire::test(LoginForm::class)
            ->set('username','')
            ->set('password','')
            ->call('login')
            ->assertHasErrors(['username','password']);
    }
}
