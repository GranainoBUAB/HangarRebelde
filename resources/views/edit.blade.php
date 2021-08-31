@extends('layouts.app')

@section('content')
<div class = "ct-form d-flex justify-content-center">
<form method="post" action="{{route('update', $product->id)}}" enctype="multipart/form-data">
@method('patch')
    @csrf
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
          <input type="text" name="author" value="{{$product->author1}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 2</span>
          <input type="text" name="author" value="{{$product->author2}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 3</span>
          <input type="text" name="author" value="{{$product->author3}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 4</span>
          <input type="text" name="author" value="{{$product->author4}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 5</span>
          <input type="text" name="author" value="{{$product->author5}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 6</span>
          <input type="text" name="author" value="{{$product->author6}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>


        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Editorial</span>
          <input type="text" name="editorial" value="{{$product->editorial}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
          {{-- <input type="text" name="isAvailable" value="{{$product->isAvailable}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> --}}
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
          <label class="input-group-text">Categoría Principal</label>
          <select class="form-control" name="categoryMain" value="{{$product->categoryMain}}"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            @foreach ($categoryMains as $categoryMain)
            <option>{{ $categoryMain->category }}</option>
            @endforeach
          </select>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Categoría Secundaria</span>
          <input type="text" name="categorySecondary" value="{{$product->categorySecondary}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

      {{--  <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Valoración</span>
          <input type="text" name="rating" value="{{$product->rating}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div> --}}

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Portada</span>
          <img class="mr-1" src="{{ asset('storage') . '/' . $product->image1 }}" width=90 alt="">
          <input type="file" name="image1" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Contraportada</span>
          <img class="mx-1" src="{{ asset('storage') . '/' . $product->image2 }}" width=90 alt="">
          <input type="file" name="image2" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Interior</span>
          {{$product->image3}}<img class="mx-1" src="{{ asset('storage') . '/' . $product->image3 }}" width=90 alt="">
          <input type="file" name="image3" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
          <span class="input-group-text" id="inputGroup-sizing-default">Etiquetas</span>
          <input type="text" name="tag" value="{{$product->tag}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Num páginas</span>
          <input type="text" name="pages" value="{{$product->pages}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <button type="submit" class="btn btn-success">Validar</button>
          <button type="submit" class="btn btn-danger ml-3">Cancelar</button>
        </div>
      </div>
  </form>
</div>
  <x-footer/>
@endsection
