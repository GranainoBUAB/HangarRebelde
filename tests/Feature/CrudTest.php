<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
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

    public function test_a_post_can_be_created(){

        $this->withoutExceptionHandling();


        $response = $this->post('/products',[
            'title'=> 'Test Title',
            'description'=> 'Test Description',
            'price'=> 10,5,
            'author'=> 'Test author',
            'editorial'=> 'Test editorial',
            'isAvailable'=> true,
            'canReserve'=> true,
            'categoryMain'=> 'Test categoryMain',
            'image1'=> 'Test image1',
            'format'=> 'Test format',
            'pages'=> 'Test pages'
            
        ]);

        $response->assertOk();

        $this->assertCount(1, Product::all());

        $product =  Product::first();

        $this->assertEquals($product->title, 'Test Title');
        $this->assertEquals($product->description, 'Test Description');
    }

    public function test_list_of_posts_can_be_retrived(){

        $this->withoutExceptionHandling();

        Product::all();
        
        $response = $this->get('/');
        
        $response->assertStatus(200)
            ->assertViewIs('home');
            
    }

    public function test_a_posts_can_be_retrived($id){

        $this->withoutExceptionHandling();

        $product = Product::first();
        
        $response = $this->get($product->id);
        
        $response->assertStatus(200);
            
            
    }

    
}
