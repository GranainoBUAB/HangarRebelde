<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    static function sumAndQuantity()
    {
        $sum = 0;
        $quantity = 0;

        if (Auth::check()) {
            $user = Auth::user();
            $user_id = $user->id;
            $products = DB::table('products')
                ->join('carts', 'products.id', '=', 'carts.product_id')
                ->where('user_id', '=', $user_id)
                ->get();

            foreach ($products as $product) {
                $sum += $product->price * $product->quantity;
                $quantity += $product->quantity;
            }
        }

        $result = ['sum' => $sum, 'quantity' => $quantity];
        return ($result);
    }

    static function deleteAllProductsInCart()
    {   
        $user_id = auth()->id();

        DB::table('carts')
            ->where('user_id', $user_id)
            ->delete();

        return;
    }
}
