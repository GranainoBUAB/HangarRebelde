<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CategoryMain;
use Illuminate\Http\Request;
use App\Models\CategorySecondary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $products = Product::orderBy('id', 'desc')->take(10)->simplePaginate(10);
        $sumAndQuantity = Cart::sumAndQuantity();

        return view('home', compact('products', 'user', 'sumAndQuantity'));
    }

    public function create()
    {
        $categoryMains = CategoryMain::all();
        $categorySecondaries = CategorySecondary::all();
        return view('create', compact('categoryMains', 'categorySecondaries'));
    }

    public function store(Request $request)
    {
        $product = request()->except('_token');

        if ($request->hasFile('image1')) {
            $product['image1'] = $request->file('image1')->store('img', 'public');
        }

        if ($request->hasFile('image2')) {
            $product['image2'] = $request->file('image2')->store('img', 'public');
        }

        if ($request->hasFile('image3')) {
            $product['image3'] = $request->file('image3')->store('img', 'public');
        }

        Product::create($product);
        return redirect()->route('home');
    }

    public function show($id)
    {
        $product = Product::find($id);
        $productrelations = $product->productRelationed($product);
        $sumAndQuantity = Cart::sumAndQuantity();

        return view('show', compact('product', 'productrelations', 'sumAndQuantity'));
    }

    public function edit($id)
    {
        $categoryMains = CategoryMain::all();
        $categorySecondaries = CategorySecondary::all();
        $product = Product::find($id);

        return view('edit', compact('product', 'categoryMains', 'categorySecondaries'));
    }

    public function update(Request $request, $id)
    {
        $changesProduct = request()->except(['_token', '_method']);

        if ($request->hasFile('image1')) {
            $changesProduct['image1'] = $request->file('image1')->store('img', 'public');
        }

        if ($request->hasFile('image2')) {
            $changesProduct['image2'] = $request->file('image2')->store('img', 'public');
        }

        if ($request->hasFile('image3')) {
            $changesProduct['image3'] = $request->file('image3')->store('img', 'public');
        }

        Product::where('id', '=', $id)->update($changesProduct);
        $product = Product::findOrFail($id);
        return redirect()->route('home')->with('success', 'Updated');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        $products = Product::searchProducts($request);
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('search', compact('products', 'sumAndQuantity'));
    }

    public function filter($catMain, $catSec = null)
    {
        if ($catSec === null) {
            $products = Product::where('categoryMain', '=', $catMain)->simplePaginate(2);
        } else {
            $products = Product::where('categorySecondary', '=', $catSec)->simplePaginate(2);
        }
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('home', compact('products', 'sumAndQuantity'));
    }

    public function viewByAuthor($author)
    {
        $products = Product::filterAuthor($author);
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('home', compact('products', 'sumAndQuantity'));
    }

    public function viewByTag($tag)
    {
        $products = Product::filterTag($tag);
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('home', compact('products', 'sumAndQuantity'));
    }
}
