@extends('layouts.app')

@section('content')

    <x-header />
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-column flex-md-row mt-5 align-items-center align-items-md-start">
                {{-- @dd($product->image1) --}}
                <div class="ct-imgShow">
                    <img class="imgShow" src="{{ asset('storage') . '/' . $product->image1 }}" alt="">
                </div>
                <div class="card-body p-0 mx-md-4 my-4 my-md-0 ct-infoShow">
                    {{-- <h5 class="card-title">Id.{{ $product->id }}</h5> --}}
                    <h5 class="card-title font-weight-bold txtTitleShow">{{ $product->title }}</h5>
                    <h6 class="card-title font-weight-bold">Autor:</h6>
                    <p class="card-title">{{ $product->author }}</p>
                    <h6 class="card-title font-weight-bold">Editorial:</h6>
                    <p class="card-title">{{ $product->editorial }}</p>
                    <h6 class="card-title font-weight-bold">Precio:</h6>
                    <p class="card-title">{{ $product->price }}</p>
                    <h6 class="card-title font-weight-bold">Descripción:</h6>
                    <p class="card-title">{{$product->description}}</p>
                    <div class="d-flex flex-row flex-wrap align-items-center">
                        @if($product->isAvailable)
                        <h6 class="extraShow font-weight-bold mr-2">Disponible</h6>
                        @else
                        <h6 class="extraShow font-weight-bold mr-2">No Disponible</h6>
                        @endif
                        <h6 class="extraShow font-weight-bold mx-2"> | Para Reservar:</h6>
                        <p class="card-title extraShow">{{ $product->canReserve }}</p>
                        <h6 class="extraShow font-weight-bold mx-2"> | Categoría Principal:</h6>
                        <p class="card-title extraShow">{{ $product->categoryMain }}</p>
                    </div>
                    <div class="d-flex flex-row mt-3">
                        <img class="mr-1" src="{{ asset('storage') . '/' . $product->image1 }}" width=90 alt="">
                        <img class="mx-1" src="{{ asset('storage') . '/' . $product->image2 }}" width=90 alt="">
                        <img class="mx-1" src="{{ asset('storage') . '/' . $product->image3 }}" width=90 alt="">
                        <div class="d-flex flex-column justify-content-end">
                            <div class="d-flex flex-row align-items-center flex-wrap">
                                <h6 class="extraShow font-weight-bold mx-2">Formato:</h6>
                                <p class="card-title extraShow">{{ $product->format }}</p>
                            </div>
                            <div class="d-flex flex-row align-items-center flex-wrap">
                                <h6 class="extraShow font-weight-bold mx-2">Páginas:</h6>
                                <p class="card-title extraShow">{{ $product->pages }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <br>
                <br>
                <div>
                    <h2 class="card-title font-weight-bold txtTitleShow">Productos relacionados</h2>
                </div>

            </center>
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
        </div>
    </div>
    <x-footer />

@endsection
