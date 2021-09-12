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

        /*  $products = Product::all(); */
        $products = Product::orderBy('id', 'desc')->take(10)->get();
        $sumAndQuantity = Cart::sumAndQuantity();

        return view('home', compact('products', 'user', 'sumAndQuantity'));


        /* return view('cart', compact('products', 'sumAndQuantity')); */
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

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'author1' => $request->author1,
            'author2' => $request->author2,
            'author3' => $request->author3,
            'author4' => $request->author4,
            'author5' => $request->author5,
            'author6' => $request->author6,
            'editorial' => $request->editorial,
            'isAvailable' => $request->isAvailable,
            'canReserve' => $request->canReserve,
            'isbn' => $request->isbn,
            'categoryMain' => $request->categoryMain,
            'categorySecondary' => $request->categorySecondary,
            'rating' => $request->rating,
            'image1' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3,
            'dateSale' => $request->dateSale,
            'format' => $request->format,
            'tag1' => $request->tag1,
            'tag2' => $request->tag2,
            'tag3' => $request->tag3,
            'pages' => $request->pages
        ]);


        if ($request->hasFile('image1')) {
            $product['image1'] = $request->file('image1')->store('img', 'public');
        }

        if ($request->hasFile('image2')) {
            $product['image2'] = $request->file('image2')->store('img', 'public');
        }

        if ($request->hasFile('image3')) {
            $product['image3'] = $request->file('image3')->store('img', 'public');
        }


        $product->save();
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

        if ($request->hasFile('image1')) {
            $product = Product::findOrFail($id);
            Storage::delete('public/' . $product->image);
            $changesProduct['image1'] = $request->file('image1')->store('img', 'public');
        }

        if ($request->hasFile('image2')) {
            $product = Product::findOrFail($id);
            Storage::delete('public/' . $product->image);
            $changesProduct['image2'] = $request->file('image2')->store('img', 'public');
        }

        if ($request->hasFile('image3')) {
            $product = Product::findOrFail($id);
            Storage::delete('public/' . $product->image);
            $changesProduct['image3'] = $request->file('image3')->store('img', 'public');
        }


        Product::where('id', '=', $id)->update($changesProduct);

        $product = Product::findOrFail($id);

        return redirect()->route('home')->with('success', 'Updated');
        //return redirect()->back();

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

        $products = Product::where('title', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author1', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author2', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author3', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author4', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author5', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author6', 'like', '%' . $request->input('query') . '%')
            ->orWhere('isbn', 'like', '%' . $request->input('query') . '%')
            ->orWhere('editorial', 'like', '%' . $request->input('query') . '%')
            ->get();

        return view('search', compact('products'));
    }

    public function filter($catMain, $catSec = null)
    {
        if ($catSec === null) {

            $products = Product::where('categoryMain', '=', $catMain)->get();
        } else {
            $products = Product::where('categorySecondary', '=', $catSec)->get();
        }
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('home', compact('products','sumAndQuantity'));
    }

    public function viewByAuthor($author)
    {

        $products = Product::filterAuthor($author);
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('home', compact('products','sumAndQuantity'));
    }

    public function viewByTag($tag)
    {
        $products = Product::filterTag($tag);
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('home', compact('products','sumAndQuantity'));
    }
}
