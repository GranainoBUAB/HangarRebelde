@extends('layouts.app')

@section('content')

<x-header />

  <div class="container">
    <div class="row justify-content-center">
      <div class="card" style="width: 18rem;">
        <table class="table">
            <tbody>
              <div class="">
                <h2>Result for Products</h2>
                @foreach ($products as $product)
                    <tr>
                          <img src="{{ asset('storage').'/'.$product->image1}}" alt="">
                          <div class="card-body">
                          <h5 class="card-title">Titulo: {{$product->title}}</h5>
                          {{-- <h5 class="card-title">Description: {{$product->description}}</h5> --}}
                          <h5 class="card-title">Price: {{$product->price}}</h5>
                          {{-- <h5 class="card-title">Author: {{$product->author}}</h5>
                          <h5 class="card-title">Editorial: {{$product->editorial}}</h5>
                          <h5 class="card-title">IsAvailable: {{$product->isAvailable}}</h5>
                          <h5 class="card-title">CanReserve: {{$product->canReserve}}</h5>
                          <h5 class="card-title">CategoryMain: {{$product->categoryMain}}</h5>
                          <img src="{{ asset('storage').'/'.$product->image1}}" width=90 alt="">
                          <img src="{{ asset('storage').'/'.$product->image2}}" width=90 alt="">
                          <img src="{{ asset('storage').'/'.$product->image3}}" width=90 alt="">
                          <h5 class="card-title">Format: {{$product->format}}</h5>
                          <h5 class="card-title">Pages: {{$product->pages}}</h5> --}}
                          <a href="{{ route('show', ['id'=>$product->id]) }}"><button type="submit" class="btn btn-primary">Show</button></a>
                      </div>
                    </tr>
                @endforeach
              </div>
            </tbody>
        </table>
      </div>
    </div>
  </div>
  <x-footer/>
@endsection
