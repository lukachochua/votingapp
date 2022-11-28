<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function can_check_if_user_is_an_admin()
    {
        $user = User::factory()->make([
            'name' => 'luka',
            'email' => 'lukachochua@gmail.com'
        ]);

        $userB = User::factory()->make([
            'name' => 'Ano',
            'email' => 'anota@gmail.com'
        ]);

        $this->assertTrue($user->isAdmin());
        $this->assertFalse($userB->isAdmin());

    }

}
