@extends('layouts.app')

@section('content')

<div class="d-flex flex-wrap row justify-content-center">

@foreach ($products as $product)
    <div class="ct-product m-3">
        <div class="ct-img">
            <a href="{{ route('show', ['id'=>$product->id]) }}">
                <img class="imgCard" src="{{ asset('storage').'/'.$product->image1}}" alt="">
            </a>
        </div>
        <div class="ct-info d-flex flex-row align-items-center p-1">
            <div class="ct-txt d-flex flex-column justify-content-center">
                <div class="txtTitle d-flex flex-row align-items-center">
                    <p class="txtInfoTitle m-0">{{ $product->title }} </p>
                    <p class="txtPoints m-0">...</p>
                </div>
                <p class="txtInfo">{{ $product->price }} &#8364</p>
            </div>
            <div class="separator"></div>
            <img class="icoCard m-1" src="<?php echo asset('storage/img/shopping-cart.svg')?>" alt="Flaticon">
        </div>
    </div>

@endforeach
</div>

{{-- NO BORRAR - MANTENERLO COMO REFERENCIA --}}

{{-- 
    <table class="table">
        <tbody>
            <a href="{{ route('create') }}"><button type="text" class="btn btn-primary">Create</button></a>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}
                        <a href="{{ route('show', ['id'=>$product->id]) }}"><button type="submit" class="btn btn-primary">Show</button></a>
                        <a href="{{ route('edit', ['id'=>$product->id]) }}"><button type="text" class="btn btn-primary">Edit</button></a>
                        <a href="{{ route('delete',['id'=>$product->id]) }}"><button type="submit" class="btn btn-danger">Delete</button></a>
                    </td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->author }}</td>
                    <td>{{ $product->editorial }}</td>
                    <td>{{ $product->isAvailable }}</td>
                    <td>{{ $product->canReserve }}</td>
                    <td>{{ $product->isbn }}</td>
                    <td>{{ $product->categoryMain }}</td>
                    <td>{{ $product->categorySecondary }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->rating }}</td>
                    <td><img src="{{ asset('storage').'/'.$product->image1}}" width=90 alt=""></td>
                    <td><img src="{{ asset('storage').'/'.$product->image2}}" width=90 alt=""></td>
                    <td><img src="{{ asset('storage').'/'.$product->image3}}" width=90 alt=""></td>
                    <td>{{ $product->dateSale }}</td>
                    <td>{{ $product->format }}</td>
                    <td>{{ $product->pages }}</td>
                    <td>{{ $product->tag }}</td>


                </tr>
            @endforeach
        </tbody>
    </table> --}}





    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<x-footer/>
@endsection
