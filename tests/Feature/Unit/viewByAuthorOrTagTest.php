<?php

namespace Tests\Feature\Unit;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class viewByAuthorOrTagTest extends TestCase
{
    use RefreshDatabase;

    public function test_returnAllProductContainThisAuthor()
    {
        $product1 = Product::Factory()->create([
            'author1' => 'Jhon'
        ]);
        $product2 = Product::Factory()->create([
            'author1' => 'Mike'
        ]);
        $product3 = Product::Factory()->create([
            'author1' => 'Jhon'
        ]);

        $products = Product::filterAuthor($product1->author1);

        $this->assertEquals($products->count(), 2);
    }

    public function test_returnAllProductContainThisTag()
    {
        $product1 = Product::Factory()->create([
            'tag1' => 'Marvel'
        ]);
        $product2 = Product::Factory()->create([
            'tag1' => 'DC'
        ]);
        $product3 = Product::Factory()->create([
            'tag1' => 'Marvel'
        ]);

        $products = Product::filterTag($product1->tag1);

        $this->assertEquals($products->count(), 2);
    }
}
