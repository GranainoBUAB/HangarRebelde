@extends('layouts.app')

@section('content')
    <x-navbar sum="{{$sumAndQuantity['sum']}}" quantity="{{$sumAndQuantity['quantity']}}"/>
    {{-- <x-categories /> --}}

  <div class="d-flex flex-wrap row justify-content-center">

    @foreach ($products as $product)
        <div class="ct-product m-3">
            <div class="ct-img">
                <a href="{{ route('show', ['id' => $product->id]) }}">
                    <img class="imgCard" src="{{ asset('storage') . '/' . $product->image1 }}" alt="">
                </a>
            </div>
            <div class="ct-info d-flex flex-row align-items-center p-1">
                <div class="ct-txt d-flex flex-column justify-content-center">
                    <div class="txtTitle d-flex flex-row align-items-center">
                        <p class="txtInfoTitle m-0">{{ $product->title }} </p>
                        <p class="txtPoints m-0">...</p>
                    </div>
                    <p class="txtPrice">{{ $product->price }} &#8364</p>
                </div>
                <div class="separator"></div>
                <a href="{{ route('addCart', ['product_id'=>$product->id]) }}">
                    <img class="icoCard m-1" src="{{url('/img/shopping-cart.svg')}}" alt="Flaticon">
                </a>
            </div>
        </div>

    @endforeach
</div>
@endsection
