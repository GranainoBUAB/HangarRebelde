<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $newProduct = request()->except('_token');
        Product::create($newProduct); */
        
        $product = Product::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'author'=> $request->author,
            'editorial'=> $request->editorial,
            'isAvailable'=> $request->isAvailable,
            'canReserve'=> $request->canReserve,
            'isbn'=> $request->isbn,
            'categoryMain'=> $request->categoryMain,
            'categorySecondary'=> $request->categorySecondary,
            'rating'=> $request->rating,
            'image1'=> $request->image1,
            'image2'=> $request->image2,
            'image3'=> $request->image3,
            'dateSale'=> $request->dateSale,
            'format'=> $request->format,
            'tag'=> $request->tag,
            'pages'=> $request->pages
        ]); 

        if ($request->hasFile('image1')){
            $product['image1'] = $request->file('image1')->store('img', 'public');
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
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));
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
        $updateProduct = request()->except(['_token', '_method']);
        Product::findOrFail($id)->update($updateProduct);
        
    /*  $product = Product::whereId($id);
        
        $product->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'author'=> $request->author,
            'editorial'=> $request->editorial,
            'isAvailable'=> $request->isAvailable,
            'canReserve'=> $request->canReserve,
            'isbn'=> $request->isbn,
            'categoryMain'=> $request->categoryMain,
            'categorySecondary'=> $request->categorySecondary,
            'rating'=> $request->rating,
            'image1'=> $request->image1,
            'image2'=> $request->image2,
            'image3'=> $request->image3,
            'dateSale'=> $request->dateSale,
            'format'=> $request->format,
            'tag'=> $request->tag,
            'pages'=> $request->pages
        ]); */

        return redirect()->route('home');
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
}
