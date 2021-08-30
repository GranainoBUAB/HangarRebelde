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

    public function test_a_product_can_be_created(){

        $this->withoutExceptionHandling();
        
        Product::factory(1)->create([
            'id'=> 1,
            'title'=> 'Test Title',
            'description'=> 'Test Description'
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);

        $this->assertCount(1, Product::all());

        $product =  Product::first();

        $this->assertEquals($product->title, 'Test Title');
        $this->assertEquals($product->description, 'Test Description');
    }


    public function test_list_of_products_can_be_retrived(){

        $this->withoutExceptionHandling();

        Product::all();
        
        $response = $this->get('/');
        
        $response->assertStatus(200)
            ->assertViewIs('home');
            
    }

    public function test_a_product_can_be_deleted(){

        $this->withoutExceptionHandling();

        Product::factory(1)->create([
            'id'=> 1
        ]);

        $response = $this->get('/');
        //dd($response);
        $response->assertOk();

        $this->assertCount(1, Product::all());
        
        $response = $this->delete('/delete/1');
        //dd($response);
        $this->assertCount(0, Product::all());
    }

    public function test_a_product_can_be_updated(){

        Product::factory(1)->create([
            'id'=> 1,
            'title'=> 'Test Title'
        ]);

        $response = $this->get('/');
        //dd($response);
        $response->assertOk();

        $this->assertCount(1, Product::all());

        $response = $this->patch('/products/1', [
            'title'=> 'Update Title',

        ]);
        //dd($response);
        $this->assertEquals(Product::first()->title,'Update Title');
    }
}
