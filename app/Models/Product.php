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
        'tag1','tag2','tag3',
    ];

    public function productRelationed($product)
    {
        /* $index=0; */
        do {
            /* $index++; */
            $arrayId = array();
            $arrayId[] = $product->id;
            $repeat = false;

            $productrelation1 = Product::where('editorial', 'like', '%' . $product->editorial . '%')->inRandomOrder()->take(1)->get();
            $productrelation2 = Product::where('categorySecondary', 'like', '%' . $product->categorySecondary . '%')->inRandomOrder()->take(1)->get();
            $productrelation3 = Product::where('categoryMain', 'like', '%' . $product->categoryMain . '%')->inRandomOrder()->take(1)->get();

            $productrelation12 = $productrelation1->concat($productrelation2);
            $productrelations = $productrelation12->concat($productrelation3);

            foreach ($productrelations as $productrelation) {
                $lenght = count($arrayId);
                for ($i = 0; $i != $lenght; $i += 1) {
                    if ($arrayId[$i] === $productrelation->id) {
                        $repeat = true;
                    }
                }
                $arrayId[] = $productrelation->id;
            }
        } while ($repeat);
        /* dd($index); */
        return ($productrelations);
    }
}
