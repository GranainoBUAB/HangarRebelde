@extends('layouts.app')

@section('content')
    <x-navbar sum="{{$sumAndQuantity['sum']}}" quantity="{{$sumAndQuantity['quantity']}}"/>

        <div class="ms-md-0 mt-3">
            <h4 class="ps-2 ms-3 pt-3">Mi carrito de la compra</h4>
        </div>

        <!-- flash message -->
        <div class="ms-md-0 mt-3">
            @if (session()->has('message'))
            <div class="alert">
                {{ session('message') }}
            </div>
            <div>
                <a href="{{ route('home') }}">
                Clique aquí para seguir comprando
                </a>
            </div>
            @endif
        </div>

        <div class="ms-md-0 mt-3">
            <form action="{{route('deleteAllProducts')}}" method="post">
                @method('delete')
                @csrf
                <button class="btn-deleteAllProducts bg-light" type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar todos los productos del carrito? ">Vaciar mi carrito</button>
            </form>
        </div>

    <div class="mt-md-3 ms-3 d-flex flex-wrap">
    @foreach ($products as $product)

        <div class="card border-light bg-light mb-3 ps-2 mt-3 card-cart">
            <div class="row g-0 ps-3 me-0">
                <a class="col-md-2 p-0 pt-lg-2" href="{{ route('show', ['id' => $product->product_id]) }}">
                    <img src="{{ asset('storage') . '/' . $product->image1 }}" class="img-fluid imgCart rounded" alt="...">
                </a>
                <div class="col-sm-9 px-0">
                    <div class="card-body p-2">
                        <h6 class="card-title mb-1">{{ $product->title }}</h6>
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
                            <select class="form-select p-1" aria-label="Default select example">
                                <option selected value="1">1</option>
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <p class="cartPrice m-2">{{ $product->price }} &#8364</p>
                            <form action="{{route('removeCart', $product->product_id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <button class="btn-trash bg-light" type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto del carrito? {{ $product->title }}')"><img class="img-trash"  src="{{url('/img/papelera-cerrada.svg')}}" alt="Freepik"></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="line container-fluid me-2 p-0">
        </div>
    @endforeach

        <div class="row-5 row-sm-4">
            <div class="card summary mt-3 p-2 ">
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
                                <span class="btn  btn-continue" type="button">Continuar</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
