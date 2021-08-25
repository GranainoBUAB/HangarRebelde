@extends('layouts.app')

@section('content')
    <table class="table">
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
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
                    <td><img src="{{ $product->image1 }}" width=90 alt=""></td>
                    <td><img src="{{ $product->image2 }}" width=90 alt=""></td>
                    <td><img src="{{ $product->image3 }}" width=90 alt=""></td>
                    <td>{{ $product->dateSale }}</td>
                    <td>{{ $product->format }}</td>
                    <td>{{ $product->pages }}</td>
                    <td>{{ $product->tag }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
