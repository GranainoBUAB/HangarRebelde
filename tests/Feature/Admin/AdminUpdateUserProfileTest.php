<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminEditUserProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_profile_can_be_updated_by_admin()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $admin = User::factory()->create(['isAdmin'=>true]);

        $this->actingAs($admin);
    
        $this->assertCount(2, User::all());

        $response = $this->patch(route('updateUsers', $user->id), [
            'name'=> 'Update Name',
        ]);
    
        $this->assertEquals(User::first()->name,'Update Name');

        $this->actingAs($user);

        $response = $this->patch(route('updateUsers', $user->id), [
            'name'=> 'Update Name by user',
        ]);
    
        $this->assertEquals(User::first()->name,'Update Name');

    } 

}