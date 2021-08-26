@extends('layouts.app')

@section('content')

    <x-header />

    
<div class="d-flex flex-wrap row justify-content-center">
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
            <img class="icoCard m-1" src="<?php echo asset('storage/img/carrito-negro.png'); ?>" alt="Flaticon">
        </div>
</div>         
     
    
      
        
        

                <div class="card-body">
                    <h5 class="card-title">Id.{{ $product->id }}</h5>
                    <h5 class="card-title">Titulo: {{ $product->title }}</h5>
                    <h5 class="card-title">Description: {{$product->description}}</h5> 
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
                </div>
     
            <center>
                <br>
                <br>
                <div>
                    <h2>Productos relacionados</h2>
                </div>

            </center>
           
        </div>
    </div>
    <div class="row justify-content-center">

        @foreach ($productrelations as $productrelation)
            <div class="ct-product m-3">
                <div class="ct-img">
                    <a href="{{ route('show', ['id' => $productrelation->id]) }}">
                        <img class="imgCard" src="{{ asset('storage') . '/' . $productrelation->image1 }}"
                            alt="">
                    </a>
                </div>
                <div class="ct-info d-flex flex-row align-items-center p-1">
                    <div class="ct-txt d-flex flex-column justify-content-center">
                        <div class="txtTitle d-flex flex-row align-items-center">
                            <p class="txtInfoTitle m-0">{{ $productrelation->title }} </p>
                            <p class="txtPoints m-0">...</p>
                        </div>
                        <p class="txtPrice">{{ $productrelation->price }} &#8364</p>
                    </div>
                    <div class="separator"></div>
                    <img class="icoCard m-1" src="<?php echo asset('storage/img/carrito-negro.png'); ?>" alt="Flaticon">
                </div>
            </div>
        @endforeach
    </div>
 

    <x-footer />

@endsection
