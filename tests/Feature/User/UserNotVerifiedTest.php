<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserNotVerifiedTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_not_verified()
    {
        $user1 = User::factory(2)->create();
        $response = User::userNotVerified();
        $this->assertEquals(2, $response->count());
    }
}
