@extends('layouts.app')

@section('content')
        <table>
            
            <div class="container ct-create">
                <div class="card-header my-4"><label for="" class="d-flex justify-content-center text-md-right">{{ __('Mi Perfil') }}</label></div>

                    <div class="d-flex flex-row mb-3">
                        <a href="{{ route('editMyProfile', ['id'=>$user->id]) }}"><img class="icoAdmin" src="{{url('/img/edit.svg')}}" alt="Pixel perfect"></a>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                        <span type="text" name="name" value="{{$user->name}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->name}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
                        <span type="text" name="surname"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->surname}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        <span type="text" name="email" value="{{$user->email}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->email}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">DNI</span>
                        <span type="text" name="dni" value="{{$user->dni}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->dni}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                        <span type="text" name="phone1" value="{{$user->phone1}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->dni}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Otro telefono</span>
                        <span type="text" name="phone2" value="{{$user->phone2}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->phone2}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Dirrección</span>
                        <span type="text" name="address" value="{{$user->address}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->address}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">C.P</span>
                        <span type="text" name="zipCode" value="{{$user->zipCode}}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->zipCode}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Ciudad</span>
                        <span type="text" name="city" value="{{$user->city}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->city}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Provincia</span>
                        <span type="text" name="region" value="{{$user->region}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->region}}</span>
                    </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">País</span>
                        <span type="text" name="country" value="{{$user->country}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">{{$user->country}}</span>
                    </div>
        
            
            
            
            </div>   
        </table>

    @endsection



    