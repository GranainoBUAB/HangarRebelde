@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$products->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Id.{{$products->id}} {{$products->description}}</h5>
                <h5 class="card-title">Description: {{$products->description}}</h5>
                <h5 class="card-title">Price: {{$products->price}}</h5>
                <h5 class="card-title">Author: {{$products->author}}</h5>
                <h5 class="card-title">Editorial: {{$products->editorial}}</h5>
                <h5 class="card-title">IsAvailable: {{$products->isAvailable}}</h5>
                <h5 class="card-title">CanReserve: {{$products->canReserve}}</h5>
                <h5 class="card-title">CategoryMain: {{$products->categoryMain}}</h5>
                <h5 class="card-title">Image1: {{$products->image1}}</h5>
                <h5 class="card-title">Format: {{$products->format}}</h5>
                <h5 class="card-title">Pages: {{$products->pages}}</h5>
            </div>
        </div>
    </div>
</div>
@endsection