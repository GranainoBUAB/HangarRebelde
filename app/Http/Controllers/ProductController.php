<?php

namespace App\Http\Controllers;

use App\Models\CategoryMain;
use App\Models\CategorySecondary;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function category()
    {
        $categoryMains = CategoryMain::all();
        $categorySecondaries = CategorySecondary::all();

        return view('category', compact('categoryMains','categorySecondaries'));

    }

    public function index()
    {
        /*  $products = Product::all(); */
        $products = Product::orderBy('id', 'desc')->take(5)->get();

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
        
        /* $updateProduct = request()->except(['_token', '_method']);
        Product::findOrFail($id)->update($updateProduct); */
        
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

        $changesProduct = request()->except(['_token', '_method']);

        if($request->hasFile('image1')) {
            $product=Product::findOrFail($id);
            Storage::delete('public/'.$product->image);
            $changesProduct['image1']=$request->file('image1')->store('img', 'public');
        }


        Product::where('id', '=', $id)->update($changesProduct);
        
        $product = Product::findOrFail($id);
        
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

    public function search(Request $request)
    {
        $data=Product::where('title', 'like', '%'.$request->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }
}
