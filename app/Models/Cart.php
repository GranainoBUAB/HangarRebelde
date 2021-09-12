<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    static function sumAndQuantity(){
        $user = Auth::user();
        $user_id = $user->id;
        $products = DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->where('user_id', '=', $user_id)
            ->get();

        $sum = 0;
        $quantity = 0;
        foreach ($products as $product) {
            $sum += $product->price;
            $quantity += 1;
        }
        $result = ['sum'=>$sum, 'quantity'=>$quantity];
        return ($result);
    }
}
