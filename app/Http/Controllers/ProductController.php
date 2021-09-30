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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $user = Auth::user();

        $products = Product::orderBy('id', 'desc')->take(10)->simplePaginate(10);
        $sumAndQuantity = Cart::sumAndQuantity();

        return view('home', compact('products', 'user', 'sumAndQuantity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryMains = CategoryMain::all();
        $categorySecondaries = CategorySecondary::all();
        return view('create', compact('categoryMains', 'categorySecondaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = request()->except('_token');

        $product =  $this->storeImages($request, $product);

        Product::create($product);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        /* var_dump($product->id); */
        $productrelations = $product->productRelationed($product);
        $sumAndQuantity = Cart::sumAndQuantity();

        return view('show', compact('product', 'productrelations', 'sumAndQuantity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryMains = CategoryMain::all();
        $categorySecondaries = CategorySecondary::all();
        $product = Product::find($id);

        return view('edit', compact('product', 'categoryMains', 'categorySecondaries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $changesProduct = request()->except(['_token', '_method']);

        $changesProduct = $this->storeImages($request, $changesProduct);

        Product::where('id', '=', $id)->update($changesProduct);

        $product = Product::findOrFail($id);

        return redirect()->route('home')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
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
            $product['image1'] = $request->file('image1')->store('/');
        }
        if ($request->hasFile('image2')) {
            $product['image2'] = $request->file('image2')->store('/');
        }
        if ($request->hasFile('image3')) {
            $product['image3'] = $request->file('image3')->store('/');
        }

        return ($product);
    }
}
