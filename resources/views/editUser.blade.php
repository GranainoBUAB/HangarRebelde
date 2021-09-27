@extends('layouts.app')

@section('content')

<form method="post" action="{{route('updateUsers', $user->id)}}" enctype="multipart/form-data">
  @method('patch')
  @csrf
  <div class="container ct-create">
    <div class="card-header my-4"><label for="" class="d-flex justify-content-center text-md-right">{{ __('Editar Usuario') }}</label></div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Apellido</span>
          <textarea type="text" name="surname"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->surname}}</textarea>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          <input type="text" name="email" value="{{$user->email}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">DNI</span>
          <input type="text" name="dni" value="{{$user->dni}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Nº de socio</span>
          <input type="text" name="membership_number" value="{{$user->membership_number}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
          <input type="text" name="phone1" value="{{$user->phone1}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Otro telefono</span>
          <input type="text" name="phone2" value="{{$user->phone2}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Dirrección</span>
          <input type="text" name="address" value="{{$user->address}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">C.P</span>
          <input type="text" name="zipCode" value="{{$user->zipCode}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">Ciudad</span>
          <input type="text" name="city" value="{{$user->city}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3 d-flex align-items-center">
          <span class="input-group-text" id="inputGroup-sizing-default">Reserva</span>
          @if ($user->canReserve === 1)
            <input type="radio" class="ml-2" name="canReserve" value="1" checked>
            <span class="ml-2">Sí</span>
            <input type="radio" class="ml-2" name="canReserve" value="0">
            <span class="ml-2">No</span>
          @else
            <input type="radio" class="ml-2" name="canReserve" value="1">
            <span class="ml-2">Sí</span>
            <input type="radio" class="ml-2" name="canReserve" value="0" checked>
            <span class="ml-2">No</span>
          @endif
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">País</span>
          <input type="text" name="country" value="{{$user->country}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3 d-flex align-items-center">
            <span class="input-group-text" id="inputGroup-sizing-default">Verificado</span>
            @if ($user->verified === 1)
              <input type="radio" class="ml-2" name="verified" value="1" checked>
              <span class="ml-2">Sí</span>
              <input type="radio" class="ml-2" name="verified" value="0">
              <span class="ml-2">No</span>
            @else
              <input type="radio" class="ml-2" name="verified" value="1">
              <span class="ml-2">Sí</span>
              <input type="radio" class="ml-2" name="verified" value="0" checked>
              <span class="ml-2">No</span>
            @endif
         </div>

        <div>
          <button type="submit" class="btn bt-create">Validar</button>
          <button type="submit" class="btn bt-cancel ml-3">Cancelar</button>
        </div>
  </div>   
</form>
@endsection
