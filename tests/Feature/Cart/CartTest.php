<?php

namespace Tests\Feature\Cart;

use App\Models\Cart;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartTest extends TestCase
{
    use RefreshDatabase;
    public function test_increment_Product_in_cart()
    {
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

    public function test_calcul_sum_in_cart()
    {
        $product1 = Product::factory()->create([
            'price' => 35.00
        ]);
        $product2 = Product::factory()->create([
            'price' => 12.50
        ]);
        $product3 = Product::factory()->create([
            'price' => 25.25
        ]);
        $user = User::factory()->create();
        $user_id = $user->id;
        $this->actingAs($user);

        $user->productsCarts()->attach($product1);
        $user->productsCarts()->attach($product2);
        $user->productsCarts()->attach($product3);

        $this->get(route('incrementProductInCart', $product1->id));
        $this->get(route('incrementProductInCart', $product2->id));
        $this->get(route('incrementProductInCart', $product2->id));
        $this->get(route('incrementProductInCart', $product3->id));
        $this->get(route('incrementProductInCart', $product3->id));
        $this->get(route('incrementProductInCart', $product3->id));
        $this->get(route('incrementProductInCart', $product3->id));

        $result = Cart::sumAndQuantity();

        $this->assertEquals(7, $result['quantity']);
        $this->assertEquals(161, $result['sum']);
    }

    public function test_calcul_quantity_in_cart()
    {
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();
        $product3 = Product::factory()->create();
        $user = User::factory()->create();
        $user_id = $user->id;
        $this->actingAs($user);

        $user->productsCarts()->attach($product1);
        $user->productsCarts()->attach($product2);
        $user->productsCarts()->attach($product3);

        $this->get(route('incrementProductInCart', $product1->id));
        $this->get(route('incrementProductInCart', $product2->id));
        $this->get(route('incrementProductInCart', $product2->id));
        $this->get(route('incrementProductInCart', $product3->id));
        $this->get(route('incrementProductInCart', $product3->id));
        $this->get(route('incrementProductInCart', $product3->id));
        $this->get(route('incrementProductInCart', $product3->id));

        $result = Cart::sumAndQuantity();

        $this->assertEquals(7, $result['quantity']);
    }
}
