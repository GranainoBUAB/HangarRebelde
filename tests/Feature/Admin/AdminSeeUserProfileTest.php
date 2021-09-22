<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminSeeUserProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_profile_for_admin_route()
    {
        $this->withoutExceptionHandling();

        User::factory()->create();

        $admin = User::factory()->create(['isAdmin'=>true]);
    
        $this->actingAs($admin);

        $response = $this->get(route('getUser'));

        $response->assertStatus(200);
    } 
}
