<?php

namespace Tests\Feature;

use App\Models\User;
use App\Service\UserService;
use App\Service\UserServiceInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    protected $userService;

    public function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserServiceInterface::class);
    }
    /** @test */
    public function it_can_get_a_user_by_id()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $foundUser = $this->userService->getUserById($user->id);

        $this->assertEquals($user->id, $foundUser->id);
        $this->assertEquals($user->name, $foundUser->name);
        $this->assertEquals($user->email, $foundUser->email);
    }
    /** @test */
    public function it_can_get_users_by_pagination()
    {
        User::factory()->count(10)->create();

        $users = $this->userService->getUsersByPegination(5);

        $this->assertCount(5, $users);
        $this->assertEquals(10, User::count());
    }
}
