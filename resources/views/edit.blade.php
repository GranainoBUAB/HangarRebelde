@extends('layouts.app')

@section('content')

<form method="post" action="{{route('update', $product->id)}}" enctype="multipart/form-data">
  @method('patch')
  @csrf
  <div class="container ct-create">
    <div class="card-header my-4"><label for="" class="d-flex justify-content-center text-md-right">{{ __('Editar Producto') }}</label></div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Título</span>
            <input type="text" name="title" value="{{$product->title}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
          <textarea type="text" name="description"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$product->description}}</textarea>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Precio</span>
          <input type="text" name="price" value="{{$product->price}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 1</span>
          <input type="text" name="author1" value="{{$product->author1}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 2</span>
          <input type="text" name="author2" value="{{$product->author2}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 3</span>
          <input type="text" name="author3" value="{{$product->author3}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 4</span>
          <input type="text" name="author4" value="{{$product->author4}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 5</span>
          <input type="text" name="author5" value="{{$product->author5}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 6</span>
          <input type="text" name="author6" value="{{$product->author6}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Editorial</span>
          <input type="text" name="editorial" value="{{$product->editorial}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3 d-flex align-items-center">
          <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
          <input type="radio" class="ml-2" name="isAvailable" value="1">
          <span class="ml-2">Disponible</span>
          <input type="radio" class="ml-2" name="isAvailable" value="0">
          <span class="ml-2">No Disponible</span>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Reserva</span>
          <input type="text" name="canReserve" value="{{$product->canReserve}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">ISBN</span>
          <input type="text" name="isbn" value="{{$product->isbn}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Categoría Principal</span>
          <select class="form-control input-select" name="categoryMain" value="{{$product->categoryMain}}"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            @foreach ($categoryMains as $categoryMain)
            <option>{{ $categoryMain->category }}</option>
            @endforeach
          </select>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Categoría Secundaria</span>
          <select class="form-control input-select" name="categorySecondary" value="{{$product->categorySecondary}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            @foreach ($categorySecondaries as $categorySecondary)
            <option>{{ $categorySecondary->category }}</option>
            @endforeach
            <option></option>
          </select>
        </div>

       {{--  <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Valoración</span>
          <input type="text" name="rating" value="{{$product->rating}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div> --}}

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Portada</span>
          {{-- {{$product->image1}} --}}
          <img class="input-select" src="{{ asset('storage') . '/' . $product->image1 }}" width=90 alt="">
          <input type="file" name="image1" value="" class="form-control input-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Contraportada</span>
          {{-- {{$product->image2}} --}}
          <img class="input-select" src="{{ asset('storage') . '/' . $product->image2 }}" width=90 alt="">
          <input type="file" name="image2" value="" class="form-control input-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Interior</span>
          {{-- {{$product->image3}} --}}
          <img class="input-select" src="{{ asset('storage') . '/' . $product->image3 }}" width=90 alt="">
          <input type="file" name="image3" value="" class="form-control input-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Fecha de venta</span>
          <input type="text" name="dateSale" value="{{$product->dateSave}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Formato</span>
          <input type="text" name="format" value="{{$product->format}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta 1</span>
          <input type="text" name="tag1" value="{{$product->tag1}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta 2</span>
          <input type="text" name="tag2" value="{{$product->tag2}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Etiqueta 3</span>
          <input type="text" name="tag3" value="{{$product->tag3}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Num páginas</span>
          <input type="text" name="pages" value="{{$product->pages}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div>
          <button type="submit" class="btn bt-create">Validar</button>
          <button type="submit" class="btn bt-cancel ml-3">Cancelar</button>
        </div>
  </div>   
</form>
@endsection
