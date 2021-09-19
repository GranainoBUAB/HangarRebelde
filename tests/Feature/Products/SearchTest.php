<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class SearchTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_search_route()
    {
        $response = $this->get(route('search'));
        
        $response->assertOk();

    }


    /*  public function test_return_product_found_by_title()
    {
        $products = Product::factory()->create(['title'=>'superman']);

        
        
        $response = $this->get(route('search', [input('query')=>'superman']));
        $response->assertViewHas('superman');
        
    } */
}
