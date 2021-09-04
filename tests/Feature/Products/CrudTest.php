<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_list_of_products_can_be_retrived(){

        $this->withoutExceptionHandling();

        Product::all();
        
        $response = $this->get('/');
        
        $response->assertStatus(200)
            ->assertViewIs('home');
            
    }

    public function test_a_product_can_be_created(){

        $this->withoutExceptionHandling();

        $user = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($user);
        
        $response = $this->post(route('store') , [
            'title' => 'new title',
            'description' => 'new description',
            'price' => 'new price',
            'author1' => 'new author1',
            'editorial' => 'new editorial',
            'isAvailable' => true,
            'canReserve' => true,
            'isbn' => 'new isbn',
            'categoryMain' => 'new categoryMain',
            'image1' => 'new image1',
            'dateSale' => 'new dateSale',
            'format' => 'new format',
            'tag1' => 'new tag1',
            'pages' => 'new pages'
        ]);

        $this->assertCount(1, Product::all());

        $this->assertEquals(Product::first()->title,'new title');

        /* $user = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($user);
        
        $product = Product::factory()->create();

        $response = $this->post(route('store'), [$product]???);

        $response->assertStatus(200);

        $this->assertCount(1, Product::all());

        
        $this->assertDatabaseCount('products',1);  */
        
    }

    public function test_a_product_can_be_deleted(){

        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $response = $this->get('/');
        //dd($response);
        $response->assertOk();

        $user = User::factory()->create(['isAdmin'=>true]);
    
        $this->actingAs($user);

        $this->assertCount(1, Product::all());
        
        $response = $this->delete(route('delete', $product->id));
        //dd($response);
        $this->assertCount(0, Product::all());
    }

    public function test_a_product_can_be_updated(){

        $product = Product::factory()->create();

        $response = $this->get('/');
        //dd($response);
        $response->assertOk();

        $user = User::factory()->create(['isAdmin'=>true]);
    
        $this->actingAs($user);

        $this->assertCount(1, Product::all());

        $response = $this->patch((route('update', $product->id)), [
            'title'=> 'Update Title',
        ]);
    
        $this->assertEquals(Product::first()->title,'Update Title');
    }
}
