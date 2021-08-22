@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$products->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">id.{{$products->id}} {{$products->title}}</h5>
            </div>
        </div>
    </div>
</div>
@endsection