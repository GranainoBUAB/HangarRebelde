<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getCart()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $products = DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->where('user_id', '=', $user_id)
            ->get();
        
        return view('cart', compact('products'));
    }

    public function addCart($product_id)
    {
        $user = Auth::user();
        //dd($user);

        $product = Product::find($product_id);

        $product->userCarts()->attach($user);

    }

    public function deleteCart($product_id)
    {
        $user = Auth::user();
        //dd($user);

        $product = Product::find($product_id);

        $product->userCarts()->detach($user);

    }
}
