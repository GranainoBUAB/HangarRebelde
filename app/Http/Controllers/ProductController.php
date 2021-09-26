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

        $product =  $this->storeImages($request, $product);

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

        $changesProduct = $this->storeImages($request, $changesProduct);

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
            $products = Product::where('categoryMain', '=', $catMain)->simplePaginate(5);
        } else {
            $products = Product::where('categorySecondary', '=', $catSec)->simplePaginate(5);
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

    private function storeImages($request, $product)
    {
        if ($request->hasFile('image1')) {
            $product['image1'] = $request->file('image1')->store('img', 'public');
        }
        if ($request->hasFile('image2')) {
            $product['image2'] = $request->file('image2')->store('img', 'public');
        }
        if ($request->hasFile('image3')) {
            $product['image3'] = $request->file('image3')->store('img', 'public');
        }

        return ($product);
    }
}
