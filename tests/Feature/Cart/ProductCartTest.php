<?php

namespace Tests\Feature\Cart;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductCartTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    
    public function test_list_of_products_in_cart_view_can_be_retrived()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $user = User::factory()->create();
        $user_id = $user->id;
        $this->actingAs($user);

        $product->userCarts()->attach($user);

        $response = $this->get(route('getCart'));

        $response->assertStatus(200);

        $products = DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->where('user_id', '=', $user_id)
            ->get();

        $this->assertNotEmpty($products);

    }
    public function test_a_product_can_be_added_to_cart()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('addCart', $product->id));
        $response->assertStatus(200);

        $this->assertDatabaseCount('carts', 1)
            ->assertDatabaseHas('carts', ['product_id' => 1, 'user_id' => 1]);
    }

    public function test_a_product_can_be_removed_from_cart()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $user = User::factory()->create();
        $this->actingAs($user);

        $product->userCarts()->attach($user);

        $this->assertDatabaseCount('carts', 1);

        $response = $this->get(route('deleteCart', $product->id));
        $response->assertStatus(200);

        $this->assertDatabaseCount('carts', 0);
    }
}
