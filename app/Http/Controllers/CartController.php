<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $product = Product::find($product_id);

        if ($product->isAvailible()) {
            $this->addProductInCart($product);
        } else {
            session()->flash('message', '¡Este producto no está disponible!');
        }

        return redirect()->route('getCart');
    }

    public function removeCart($product_id)
    {
        $user = Auth::user();
        $product = Product::find($product_id);
        $user->productsCarts()->detach($product);
        return redirect()->route('getCart');
    }

    public function incrementProductInCart($product_id)
    {
        $user = Auth::user();
        $user_id = $user->id;

        DB::table('carts')
            ->where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->increment('quantity', 1);

        return redirect()->route('getCart');
    }

    public function decrementProductInCart($product_id, $quantity)
    {
        $user = Auth::user();
        $user_id = $user->id;
        if ($quantity > 1) {
            DB::table('carts')
                ->where('user_id', $user_id)
                ->where('product_id', $product_id)
                ->decrement('quantity', 1);
        }

        return redirect()->route('getCart');
    }

    public function deleteAllProducts()
    {
        $user_id = auth()->id();

        DB::table('carts')
            ->where('user_id', $user_id)
            ->delete();

        Session::flash('message', "¡No hay productos en su carrito de compra!");
        return back();
    }

    private function addProductInCart($product)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $products = DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->where('user_id', '=', $user_id)
            ->where('product_id', '=', $product->id)
            ->get();

        if ($products->count() === 0) {
            $user->productsCarts()->attach($product);
        }

        $this->incrementProductInCart($product->id);
        return redirect()->route('getCart');
    }
}