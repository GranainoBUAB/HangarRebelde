<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
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
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('cart', compact('products', 'sumAndQuantity'));
    }

    public function addCart($product_id)
    {
        $user = Auth::user();
        //dd($user);

        $product = Product::find($product_id);

        if ($product->isAvailible()) {
            //$product->userCarts()->attach($user);
            $user->productsCarts()->attach($product);
        } else {
            session()->flash('message', '¡Este producto no está disponible!');
        }

        return redirect()->route('getCart');
        //return redirect()->route('home');

    }

    public function removeCart($product_id)
    {
        $user = Auth::user();
        //dd($user);

        $product = Product::find($product_id);

        $user->productsCarts()->detach($product);

        return redirect()->route('getCart');
    }

    /* public function sumAndQuantity()
    {
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
        $result = ['sum' => $sum, 'quantity' => $quantity];
        return ($result);
    } */
}
