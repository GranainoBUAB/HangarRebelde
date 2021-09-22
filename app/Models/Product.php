<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'author1', 'author2', 'author3', 'author4', 'author5', 'author6',
        'editorial',
        'isAvailable',
        'canReserve',
        'isbn',
        'categoryMain',
        'categorySecondary',
        'description',
        'rating',
        'image1', 'image2', 'image3',
        'dateSale',
        'format',
        'pages',
        'tag1', 'tag2', 'tag3',
    ];

    public function productRelationed($product)
    {

        $arrayId = array();
        $arrayId[] = $product->id;


        if ($product->tag3 != null) {
            $productrelation1 = Product::where('tag1', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag1', 'like', '%' . $product->tag2 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag2 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag2 . '%')
                ->orwhere('tag1', 'like', '%' . $product->tag3 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag3 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag3 . '%')
                ->inRandomOrder()->take(1)->get();
        }
        if ($product->tag3 == null && $product->tag2 != null) {
            $productrelation1 = Product::where('tag1', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag1', 'like', '%' . $product->tag2 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag2 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag2 . '%')
                ->inRandomOrder()->take(1)->get();
        }
        if ($product->tag2 == null) {
            $productrelation1 = Product::where('tag1', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag1 . '%')
                ->inRandomOrder()->take(1)->get();
        }

        $productrelation2 = Product::where('categorySecondary', 'like', '%' . $product->categorySecondary . '%')->inRandomOrder()->take(1)->get();
        $productrelation3 = Product::where('categoryMain', 'like', '%' . $product->categoryMain . '%')->inRandomOrder()->take(1)->get();

        $productrelation12 = $productrelation1->concat($productrelation2);
        $productrelations = $productrelation12->concat($productrelation3);

        return ($productrelations);
    }

    static function filterAuthor($author)
    {
        $productsFilteredByAuthor = Product::where('author1', $author)
            ->orWhere('author2', $author)
            ->orWhere('author3', $author)
            ->orWhere('author4', $author)
            ->orWhere('author5', $author)
            ->orWhere('author6', $author)
            ->get();

        return ($productsFilteredByAuthor);
    }

    static function filterTag($tag)
    {
        $productsFilteredBytag = Product::where('tag1', 'like', '%' . $tag . '%')
            ->orWhere('tag2', 'like', '%' . $tag . '%')
            ->orWhere('tag3', 'like', '%' . $tag . '%')
            ->get();

        return ($productsFilteredBytag);
    }

    public function userCarts()
    {
        return $this->belongsToMany(User::class, 'carts', 'user_id', 'product_id');
    }

    public function isAvailible()
    {
        if ($this->isAvailable) {
            return true;
        }
        return false;
    }

    static function searchProducts($request)
    {
        $products = Product::where('title', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author1', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author2', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author3', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author4', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author5', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author6', 'like', '%' . $request->input('query') . '%')
            ->orWhere('isbn', 'like', '%' . $request->input('query') . '%')
            ->orWhere('editorial', 'like', '%' . $request->input('query') . '%')
            ->get();

        return ($products);
    }
}
