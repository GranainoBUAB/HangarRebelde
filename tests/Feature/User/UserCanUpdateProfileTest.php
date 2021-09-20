<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanUpdateProfileTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_profile_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->patch(route('updateMyProfile', $user->id), [
            'name'=> 'Update Name',
        ]);
    
        $this->assertEquals(User::first()->name,'Update Name');
    
        $this->assertEquals(User::first()->name,'Update Name');

    } 

}