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

        return view('category', compact('categoryMains', 'categorySecondaries'));
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
            'author' => $request->author,
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
            'tag' => $request->tag,
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

        do {
            $arrayId = array();
            $arrayId[] = $product->id;
            $repeat = false;

            $productrelation1 = Product::where('categoryMain', 'like', '%' . $product->categoryMain . '%')->inRandomOrder()->take(1)->get();
            $productrelation2 = Product::where('editorial', 'like', '%' . $product->editorial . '%')->inRandomOrder()->take(1)->get();
            $productrelation3 = Product::where('categorySecondary', 'like', '%' . $product->categorySecondary . '%')->inRandomOrder()->take(1)->get();
            $productrelation4 = Product::inRandomOrder()->take(1)->get();

            $productrelation12 = $productrelation1->concat($productrelation2);
            $productrelation34 = $productrelation3->concat($productrelation4);
            $productrelations = $productrelation12->concat($productrelation34);

            foreach ($productrelations as $productrelation) {
                $lenght = count($arrayId);
                for ($i = 0; $i != $lenght; $i += 1) {
                    if ($arrayId[$i] === $productrelation->id) {
                        $repeat = true;
                    }
                }
                $arrayId[] = $productrelation->id;
            }
        } while ($repeat);

        return view('show', compact('product', 'productrelations'));
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

        /*  
                
        $product = Product::whereId($id);

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

        $data = Product::where('title', 'like', '%' . $request->input('query') . '%')
            ->orWhere('author', 'like', '%' . $request->input('query') . '%')
            ->orWhere('isbn', 'like', '%' . $request->input('query') . '%')
            ->orWhere('editorial', 'like', '%' . $request->input('query') . '%')
            ->get();
        return view('search', ['products' => $data]);
    }
}
