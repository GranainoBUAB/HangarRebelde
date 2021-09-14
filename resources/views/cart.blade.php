@extends('layouts.app')

@section('content')
    <x-header />
    <x-navbar sum="{{$sumAndQuantity['sum']}}" quantity="{{$sumAndQuantity['quantity']}}"/>

    <div class="row d-flex flex-md-wrap justify-content-around py-3">
        <div class="col-lg-6 ms-lg-0">
            <h2 class="ps-2">Mi Carrito de la compra</h2>

    @foreach ($products as $product)
        <hr class="container-fluid me-2 p-0" style="color: #FCE8C2">
        <div class="card border-light bg-light mb-3 ps-2 pt-3" style="max-width: 700px;">
            <div class="row g-0 ps-3 me-0">
                <a class="col-md-2 p-0 p-lg-1" href="{{ route('show', ['id' => $product->product_id]) }}">
                    <img src="{{ asset('storage') . '/' . $product->image1 }}" class="img-fluid imgCart rounded" alt="...">
                </a>
                <div class="col-sm-9 px-0">
                    <div class="card-body p-2">
                        <h6 class="card-title mb-1">{{ $product->title }}</h6>
                        <div class="d-flex flex-row flex-wrap align-items-center">
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author1]) }}" class="text-reset"><p class="authors pb-1 m-0"><small>{{ $product->author1 }}  </small></p></a>

                            @if($product->author2)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author2]) }}" class="text-reset"><p class="authors pb-1 m-0">,<small>  {{ $product->author2 }} </small> </p></a>
                            @endif

                            @if($product->author3)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author3]) }}" class="text-reset"><p class="authors pb-1 m-0">,<small>  {{ $product->author3}}  </small></p></a>
                            @endif

                            @if($product->author4)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author4]) }}" class="text-reset"><p class="authors pb-1 m-0">,<small>  {{ $product->author4}}  </small></p></a>
                            @endif

                            @if($product->author5)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author5]) }}" class="text-reset"><p class="authors pb-1 m-0">,<small>  {{ $product->author5}}  </small></p></a>
                            @endif

                            @if($product->author6)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author6]) }}" class="text-reset"><p class="authors pb-1 m-0">,<small>  {{ $product->author6}}  </small></p></a>
                            @endif

                        </div>
                        <p class="card-text mb-1"><small class="text-muted">ISBN: {{ $product->isbn }}</small></p>
                        <div class="d-flex flex-nowrap justify-content-between">
                            <select class="form-select p-1" aria-label="Default select example" style="width: 60px; height: 30px;">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <p class="cartPrice mb-2 me-5">{{ $product->price }} &#8364</p>
                            <form action="{{route('removeCart', $product->product_id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <input type="submit" class="input-group-text ml-2" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto del carrito? {{ $product->title }}')" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
        <div class="col-sm-5">
            <div class="card mt-3" style="background-color: #FCE8C2">
                <div class="fw-bold">
                    Resumen
                </div>
                <hr class=" mx-1 p-0" style="color: #626261">
                <div class="card-body p-0">
                    <ul class="list-group-flush ps-0 ">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            Subtotal sin IVA
                            <span class="badge text-secondary">{{$sumAndQuantity['sum'] - ($sumAndQuantity['sum']*0.04)}}€</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent ">
                            IVA
                            <span class="badge text-secondary">{{$sumAndQuantity['sum']*0.04}}€</span>
                        </li>
                    </ul>
                    <hr class="mx-1 p-0" style="color: #626261">
                    <ul class="list-group-flush p-0 mb-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent fw-bold">
                            Total
                            <span class="badge text-secondary">{{$sumAndQuantity['sum']}}€</span>
                        </li>
                    </ul>
                    <ul class="list-group-flush ps-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            <div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        A domicilio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Recoger en tienda
                                    </label>
                                </div>
                            </div>
                                <span class="btn" type="button" style="background-color: #FF8300;">Continuar</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
@endsection
