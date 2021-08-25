@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 18rem;">
                {{-- @dd($product->image1) --}}
                <img src="{{ asset('storage') . '/' . $product->image1 }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">Id.{{ $product->id }}</h5>
                    <h5 class="card-title">Titulo: {{ $product->title }}</h5>
                    <h5 class="card-title">Description: {{ $product->description }}</h5>
                    <h5 class="card-title">Price: {{ $product->price }}</h5>
                    <h5 class="card-title">Author: {{ $product->author }}</h5>
                    <h5 class="card-title">Editorial: {{ $product->editorial }}</h5>
                    <h5 class="card-title">IsAvailable: {{ $product->isAvailable }}</h5>
                    <h5 class="card-title">CanReserve: {{ $product->canReserve }}</h5>
                    <h5 class="card-title">CategoryMain: {{ $product->categoryMain }}</h5>
                    <img src="{{ asset('storage') . '/' . $product->image1 }}" width=90 alt="">
                    <img src="{{ asset('storage') . '/' . $product->image2 }}" width=90 alt="">
                    <img src="{{ asset('storage') . '/' . $product->image3 }}" width=90 alt="">
                    <h5 class="card-title">Format: {{ $product->format }}</h5>
                    <h5 class="card-title">Pages: {{ $product->pages }}</h5>
                    <h3 class="card-title">Productos relacionados:</h3>
                </div>
            </div>
        </div>
        <center>
            <div>---------------------------------------------------------------------------------------</div>
            <div>------------------------------------- Productos relacionados---------------------------</div>
            <div>---------------------------------------------------------------------------------------</div>
        </center>
        <div class="row justify-content-center">

            @foreach ($productrelations as $productrelation)
                <div class="card" style="width: 18rem;">

                    <img src="{{ asset('storage') . '/' . $productrelation->image1 }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Id.{{ $productrelation->id }}</h5>
                        <h5 class="card-title">Titulo: {{ $productrelation->title }}</h5>
                        <h5 class="card-title">Price: {{ $productrelation->price }}</h5>
                        <h5 class="card-title">Author: {{ $productrelation->author }}</h5>
                        <h5 class="card-title">Editorial: {{ $productrelation->editorial }}</h5>
                        <img src="{{ asset('storage') . '/' . $productrelation->image2 }}" width=90 alt="">
                        <img src="{{ asset('storage') . '/' . $productrelation->image3 }}" width=90 alt="">
                        <td>
                            <a href="{{ route('show', ['id' => $productrelation->id]) }}"><button type="submit"
                                    class="btn btn-primary">Show</button></a>
                        </td>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
