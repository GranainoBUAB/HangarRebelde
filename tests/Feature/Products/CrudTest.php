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

    public function test_list_of_products_can_be_retrived()
    {
        $this->withoutExceptionHandling();

        Product::all();

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('home');
    }

    public function test_single_product_can_be_retrived()
    {
        $this->withoutExceptionHandling();

        $products = Product::factory(2)->create();

        $product = $products[1];
        $response = $this->get(route('show', $product->id));

        $response->assertOk()
            ->assertSee($product->title);
    }

    public function test_a_product_can_be_created()
    {
        $this->withoutExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);

        $response = $this->post(route('store'), [
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

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);

        $response = $this->post(route('store'), [
            'title' => 'new title userNoAdmin',
            'description' => 'new description ',
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
    }

    public function test_a_product_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);

        $this->actingAs($userNoAdmin);

        $response = $this->delete(route('delete', $product->id));
        $this->assertCount(1, Product::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);

        $this->actingAs($userAdmin);

        $response = $this->delete(route('delete', $product->id));
        $this->assertCount(0, Product::all());
    }

    public function test_a_product_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $userNoAdmin = User::factory()->create(['isAdmin' => false]);

        $this->actingAs($userAdmin);
        $this->assertCount(1, Product::all());

        $response = $this->patch(route('update', $product->id), [
            'title' => 'Update Title',
        ]);

        $this->assertEquals(Product::first()->title, 'Update Title');
        $this->actingAs($userNoAdmin);
        $this->assertCount(1, Product::all());

        $response = $this->patch(route('update', $product->id), [
            'title' => 'Update Title by User NoAdmin',
        ]);

        $this->assertEquals(Product::first()->title, 'Update Title');
    }
}
