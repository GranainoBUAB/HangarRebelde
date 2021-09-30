@extends('layouts.app')

@section('content')
    <x-navbar sum="{{$sumAndQuantity['sum']}}" quantity="{{$sumAndQuantity['quantity']}}"/>

        <div class="ms-md-0 mt-3">
            <h4 class="ps-2 ms-3 pt-3">Mi carrito de la compra</h4>
        </div>

        <div class="ps-2 ms-3">
            <a href="{{ route('home') }}">Seguir comprando</a>
        </div>

        <!-- flash message -->
        <div>
            @if (session()->has('message'))
            <div class="alert">
                {{ session('message') }}
            </div>
            @endif
        </div>

        @if ($products->count() > 0)
            <div class="ps-2 ms-3">
                <form action="{{route('deleteAllProducts')}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn-deleteAllProducts bg-light p-0" type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar todos los productos del carrito?')">Vaciar mi carrito</button>
                </form>
            </div>
        @endif

    <div class="mt-md-3 ms-3 d-flex flex-wrap justify-content-between">
    @foreach ($products as $product)

        <div class="card border-light bg-light mb-3 px-2 mt-3 card-cart col-12 col-lg-6">
            <div class="row g-0 ps-3 me-0">
                <a class="col-md-3 p-0" href="{{ route('show', ['id' => $product->product_id]) }}">
                    <img src="{{url('/img') . '/' . $product->image1 }}" class="img-fluid imgCart rounded" alt="Portada del comic {{ $product->title }}">
                </a>
                <div class="col-sm-9 px-0">
                    <div class="card-body p-0">
                        <h6 class="card-title title-cart mb-1">{{ $product->title }}</h6>
                        <div class="d-flex flex-row flex-wrap align-items-center pb-2 div-authors">
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author1]) }}" class="text-reset"><p class="authors m-0"><small>{{ $product->author1 }}  </small></p></a>

                            @if($product->author2)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author2]) }}" class="text-reset"><p class="authors m-0">,<small>  {{ $product->author2 }} </small> </p></a>
                            @endif

                            @if($product->author3)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author3]) }}" class="text-reset"><p class="authors m-0">,<small>  {{ $product->author3}}  </small></p></a>
                            @endif

                            @if($product->author4)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author4]) }}" class="text-reset"><p class="authors m-0">,<small>  {{ $product->author4}}  </small></p></a>
                            @endif

                            @if($product->author5)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author5]) }}" class="text-reset"><p class="authors m-0">,<small>  {{ $product->author5}}  </small></p></a>
                            @endif

                            @if($product->author6)
                            <a href="{{ route('viewByAuthor', ['author'=>$product->author6]) }}" class="text-reset"><p class="authors m-0">,<small>  {{ $product->author6}}  </small></p></a>
                            @endif

                        </div>

                        <p class="card-text mb-1"><small class="text-muted">ISBN: {{ $product->isbn }}</small></p>

                        <div class="d-flex flex-nowrap justify-content-between align-items-center">
                            <div class="d-flex flex-nowrap justify-content-between align-items-center">
                                <a class="d-flex justify-content-center align-items-center ct-counter" href="{{ route('decrementProductInCart', ['product_id'=>$product->product_id, 'quantity'=>$product->quantity]) }}"><img src="{{url('/img/less.svg')}}" alt="subtract products"></a>
                                <p class="cartPrice m-2">{{ $product->quantity }} </p>
                                <a class="d-flex justify-content-center align-items-center ct-counter" href="{{ route('incrementProductInCart', ['product_id'=>$product->product_id]) }}"><img src="{{url('/img/plus.svg')}}" alt="add products"></a>

                                <form action="{{route('removeCart', $product->product_id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                        <button class="btn-trash bg-light ml-2" type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto del carrito? {{ $product->title }}')"><img class="img-trash"  src="{{url('/img/papelera-cerrada.svg')}}" alt="Freepik"></button>
                                </form>
                            </div>
                            <p class="cartPrice m-2">{{ number_format($product->price * $product->quantity,2) }} &#8364</p>
                        </div>

                    </div>

                </div>
            </div>
            <hr class="line container-fluid me-2 p-0">
        </div>
    @endforeach
    </div>

    <div class="row-5 row-sm-4 ms-3">
        <div class="card summary mt-5 p-2 ">
            <div class="fw-bold ms-2">
                Resumen
            </div>
            <hr class="line-sum mx-1 p-0">
            <div class="card-body p-0">
                <ul class="list-group-flush ps-0 ">
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        Subtotal sin IVA
                        <span class="badge text-secondary">{{ number_format($sumAndQuantity['sum'] - ($sumAndQuantity['sum']*0.04),2)}}€</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent ">
                        IVA
                        <span class="badge text-secondary">{{number_format($sumAndQuantity['sum']*0.04,2)}}€</span>
                    </li>
                </ul>
                <hr class="line-sum mx-1 p-0">
                <ul class="list-group-flush p-0 mb-0">
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent fw-bold">
                        Total
                        <span class="badge text-secondary">{{number_format($sumAndQuantity['sum'],2)}}€</span>
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
                            <a href="{{ route('purchaseOrder') }}">
                                <span class="btn btn-continue align-self-end" type="button">Continuar</span>
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
