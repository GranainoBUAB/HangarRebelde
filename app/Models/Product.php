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
        /* $index=0; */
        do {
            /* $index++; */
            $arrayId = array();
            $arrayId[] = $product->id;
            $repeat = false;

            if ($product->tag3 != null){
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
            if ($product->tag3 == null && $product->tag2 != null){
                $productrelation1 = Product::where('tag1', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag1', 'like', '%' . $product->tag2 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag2 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag2 . '%')
                ->inRandomOrder()->take(1)->get();
            }
            if ($product->tag2 == null){
                $productrelation1 = Product::where('tag1', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag2', 'like', '%' . $product->tag1 . '%')
                ->orwhere('tag3', 'like', '%' . $product->tag1 . '%')
                ->inRandomOrder()->take(1)->get();
            }


            $productrelation2 = Product::where('categorySecondary', 'like', '%' . $product->categorySecondary . '%')->inRandomOrder()->take(1)->get();
            $productrelation3 = Product::where('categoryMain', 'like', '%' . $product->categoryMain . '%')->inRandomOrder()->take(1)->get();

            $productrelation12 = $productrelation1->concat($productrelation2);
            $productrelations = $productrelation12->concat($productrelation3);

           /*  foreach ($productrelations as $productrelation) {
                $lenght = count($arrayId);
                for ($i = 0; $i != $lenght; $i += 1) {
                    if ($arrayId[$i] === $productrelation->id) {
                        $repeat = true;
                    }
                }
                $arrayId[] = $productrelation->id;
            } */
        } while ($repeat);
        /* dd($index); */
        return ($productrelations);
    }

    static function filterAuthor($author)
    {
        $productsFilteredByAuthor = Product::where('author1', 'like', '%' . $author . '%')
            ->orWhere('author2', 'like', '%' . $author . '%')
            ->orWhere('author3', 'like', '%' . $author . '%')
            ->orWhere('author4', 'like', '%' . $author . '%')
            ->orWhere('author5', 'like', '%' . $author . '%')
            ->orWhere('author6', 'like', '%' . $author . '%')
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
}
