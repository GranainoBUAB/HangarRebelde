<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanSeeProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_profile_route()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
    
        $this->actingAs($user);

        $response = $this->get(route('myProfile', $user->id));

        $response->assertStatus(200);
    } 
}