@extends('layouts.app')

@section('content')
    <x-navbar sum="{{$sumAndQuantity['sum']}}" quantity="{{$sumAndQuantity['quantity']}}"/>

    <!-- flash message -->
    <div class="flex justify-center pt-8">
        @if (session()->has('message'))
        <div class="alert">
            {{ session('message') }}
            <a href="{{ route('home') }}">
                <button type="text" class="btn-products position-relative">X</button>
            </a>
        </div>
        @endif
    </div>

    <div class="d-flex flex-wrap row justify-content-center" data-bs-spy="scroll">
        @if(Auth::check() && Auth::user()->isadmin())
            <div class="position-relative me-4">
                <a href="{{ route('create') }}">
                    <button type="text" class="btn createbtn ms-3">Crear nuevo Comic</button>
                </a>
            </div>
            <br>
            <div class="position-relative me-4">
                <a href="{{ route('getUser') }}">
                    <button type="text" class="btn createbtn ms-3">Perfil de usuarios</button>
                </a>
            </div>
        @endif
        <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
            @foreach ($products as $product)
                <div class="ct-product m-lg-4 m-3">
                    <div class="ct-img">
                        <a href="{{ route('show', ['id' => $product->id]) }}">
                            <img class="imgCard" src="{{ asset('storage') . '/' . $product->image1 }}" alt="">
                        </a>
                    </div>
                    <div class="ct-info d-flex flex-row align-items-center p-1">
                        <div class="ct-txt d-flex flex-column justify-content-center">
                            <div class="txtTitle d-flex flex-row align-items-center">
                                <p class="txtInfoTitle text-truncate m-0">{{ $product->title }} </p>
                            </div>
                            <p class="txtPrice">{{ $product->price }} &#8364</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="separator">|</div>
                        </div>
                            @if ($product->isAvailable == 1)
                                <a href="{{ route('addCart', ['product_id'=>$product->id]) }}">
                                    <img class="icoCard ml-2" src="{{url('/img/shopping-cart.svg')}}" alt="Flaticon">
                                </a>
                            @else
                                <img class="icoCardNoAvailable ml-2" src="{{url('/img/cartNoAvailable.svg')}}" alt="Flaticon">
                            @endif
                    </div>

                    @if(Auth::check() && Auth::user()->isadmin())
                        <div class="input-group mb-3">
                            <a href="{{ route('edit', ['id'=>$product->id]) }}"><button type="text" class="input-group-text">Editar</button></a>
                            <form action="{{ route('delete', ['id'=>$product->id])}}" method="post">
                            @method('delete')
                            @csrf
                                <input type="submit" class="input-group-text ml-2" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto? {{ $product->title }}')" value="Eliminar">
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
            {{ $products->links() }}
        </div>
    </div>
@endsection
