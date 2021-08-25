@extends('layouts.app')

@section('content')
    
        
@foreach ($products as $product)

    <body>
        <div class="card">
            <div class="card">
                <img src="{{ asset('storage').'/'.$product->image1}}" width=90 alt="">
            </div>
            <div class="card-body">
                <div>
                    <h6 class="txtCard">Titulo: {{ $product->title }}</h6>
                    <h6>Precio: {{ $product->price }}</h6>
                </div>
                <hr>
                <img src="" alt="">
            </div>
        </div>
    </body>
@endforeach


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
@endsection
