<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminDeleteUserProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_profile_can_be_deleted_by_admin()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $admin = User::factory()->create(['isAdmin'=>true]);

        $this->assertCount(2, User::all());
    
        $this->actingAs($admin);
        
        $response = $this->delete(route('destroyUsers', $user->id));

        $response->assertRedirect('/');
        $this->assertCount(1, User::all());

        $this->actingAs($user);

        $user = User::factory()->create();
        
        $response = $this->delete(route('destroyUsers', $user->id));

        $response->assertRedirect('/');
        $this->assertCount(2, User::all());
    } 

    public function test_user_profile_can_not_be_deleted_by_user()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->assertCount(1, User::all());
    
        $this->actingAs($user);
        
        $response = $this->delete(route('destroyUsers', $user->id));

        $response->assertRedirect('/');
        $this->assertCount(1, User::all());

    } 
}
