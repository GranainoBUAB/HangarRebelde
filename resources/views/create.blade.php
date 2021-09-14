@extends('layouts.app')

@section('content')

<form method="post" action="{{route('store')}}" enctype="multipart/form-data">
    @csrf
    <div class="container ct-create">
    <div class="card-header my-4"><label for="" class="d-flex justify-content-center text-md-right">{{ __('Crear Producto') }}</label></div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Título</span>
            <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Descripción</span>
          <textarea type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></textarea>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Precio</span>
          <input type="text" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 1</span>
          <input type="text" name="author1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 2</span>
          <input type="text" name="author2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 3</span>
          <input type="text" name="author3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 4</span>
          <input type="text" name="author4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 5</span>
          <input type="text" name="author5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Autor 6</span>
          <input type="text" name="author6" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Editorial</span>
          <input type="text" name="editorial" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3 d-flex align-items-center" >
          <span class="input-group-text mr-3" id="inputGroup-sizing-default">Stock</span>
          {{-- <input type="text" name="isAvailable" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> --}}
          <input type="radio" class="ml-2" name="isAvailable" value="1">
          <span class="ml-2">Disponible</span>

          <input type="radio" class="ml-2" name="isAvailable" value="0">
          <span class="ml-2">No Disponible</span>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Reserva</span>
          <input type="text" name="canReserve" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">ISBN</span>
          <input type="text" name="isbn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Categoría Principal</span>
          <select class="form-control input-select" name="categoryMain" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            @foreach ($categoryMains as $categoryMain)
            <option>{{ $categoryMain->category }}</option>
            @endforeach
          </select>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">Categoría Secundaria</span>
          <select class="form-control input-select" name="categorySecondary" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            @foreach ($categorySecondaries as $categorySecondary)
            <option>{{ $categorySecondary->category }}</option>
            @endforeach
            <option></option>
          </select>
        </div>

      {{--  <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Valoración</span>
          <input type="text" name="rating" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div> --}}

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Portada</span>
                <input  type="file" class="form-control input-select" name="image1" id="image1">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Contraportada</span>
          <input type="file" name="image2" class="form-control input-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Imagen Interior</span>
          <input type="file" name="image3" class="form-control input-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Fecha de venta</span>
          <input type="text" name="dateSale" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Formato</span>
          <input type="text" name="format" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Etiquetas 1</span>
          <input type="text" name="tag1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Etiquetas 2</span>
          <input type="text" name="tag2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Etiquetas 3</span>
          <input type="text" name="tag3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Num páginas</span>
          <input type="text" name="pages" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      <div>
        <button type="submit" class="btn bt-create">Crear</button>
        <button type="submit" class="btn bt-cancel ml-3">Cancelar</button>
      </div>
    </div>
</form>

  @endsection
