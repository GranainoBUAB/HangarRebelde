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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'title'=> 'Test Title',
            'description'=> 'Test Description',
            'price'=> 10,5,
            'author'=> 'Test author',
            'editorial'=> 'Test editorial',
            'isAvailable'=> true,
            'canReserve'=> true,
            'categoryMain'=> 'Test categoryMain',
            'image1'=> 'Test image1',
            'format'=> 'Test format',
            'pages'=> 'Test pages',
        ]);


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
        $product = Product::whereId($id);
        
        $product->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'price'=> $request->price,
            'author'=> $request->author,
            'editorial'=> $request->editorial,
            'isAvailable'=> $request->isAvailable,
            'canReserve'=> $request->canReserve,
            'categoryMain'=> $request->categoryMain,
            'image1'=> $request->image1,
            'format'=> $request->format,
            'pages'=> $request->pages
        ]);
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
    }
}
