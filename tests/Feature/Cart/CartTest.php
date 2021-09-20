<?php

namespace Tests\Feature\Cart;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_increment_Product_in_cart()
    {
        //$this->withoutExceptionHandling();

        $product = Product::factory()->create();
        $user = User::factory()->create();
        $user_id = $user->id;
        $this->actingAs($user);

        $user->productsCarts()->attach($product);

        $this->get(route('incrementProductInCart', $product->id));
        $this->assertDatabaseHas('carts', ['quantity' => 1]);

        $this->get(route('incrementProductInCart', $product->id));
        $this->assertDatabaseHas('carts', ['quantity' => 2]);

    }

    public function test_decrement_Product_in_cart()
    {
        //$this->withoutExceptionHandling();

        $product = Product::factory()->create();
        $user = User::factory()->create();
        $user_id = $user->id;
        $this->actingAs($user);

        $user->productsCarts()->attach($product);

        $this->get(route('incrementProductInCart', $product->id));
        $this->get(route('incrementProductInCart', $product->id));
        $this->assertDatabaseHas('carts', ['quantity' => 2]);

        $this->get(route('decrementProductInCart', [$product->id, 2]));
        $this->assertDatabaseHas('carts', ['quantity' => 1]);

    }

    public function test_not_under_1_if_decrement_Product_in_cart()
    {
        //$this->withoutExceptionHandling();

        $product = Product::factory()->create();
        $user = User::factory()->create();
        $user_id = $user->id;
        $this->actingAs($user);

        $user->productsCarts()->attach($product);

        $this->get(route('incrementProductInCart', $product->id));
        $this->assertDatabaseHas('carts', ['quantity' => 1]);

        $this->get(route('decrementProductInCart', [$product->id, 1]));
        $this->assertDatabaseHas('carts', ['quantity' => 1]);

    }

   }
