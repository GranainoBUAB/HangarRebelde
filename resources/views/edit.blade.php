@extends('layouts.app')

@section('content')
  
<form method="post" action="{{route('update', $product->id)}}" enctype="multipart/form-data">
@method('patch')
    @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Título</span>
            <input type="text" name="title" value="{{$product->title}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
          <input type="text" name="description" value="{{$product->description}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Precio</span>
          <input type="text" name="price" value="{{$product->price}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor</span>
          <input type="text" name="author" value="{{$product->author}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Editorial</span>
          <input type="text" name="editorial" value="{{$product->editorial}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
          <input type="text" name="isAvailable" value="{{$product->isAvailable}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
          <span class="input-group-text" id="inputGroup-sizing-default">Categoría Principal</span>
          <input type="text" name="categoryMain" value="{{$product->categoryMain}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Categoría Secundaria</span>
          <input type="text" name="categorySecondary" value="{{$product->categorySecundary}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Valoración</span>
          <input type="text" name="rating" value="{{$product->rating}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Portada</span>
          {{$product->image1}}
          <input type="file" name="image1" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Contraportada</span>
          {{$product->image2}}
          <input type="file" name="image2" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Interior</span>
          {{$product->image3}}
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

        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="submit" class="btn btn-primary">Cancel</button>

    
  </form>

@endsection