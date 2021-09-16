@extends('layouts.app')

@section('content')
    <div class="d-flex flex-wrap row justify-content-center"  data-bs-spy="scroll">
        <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @if($users->isNotEmpty())
            
        @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">D.N.I</th>
                        <th scope="col">Nº DE SOCIO</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">OTRO TELEFONO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">C.P</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">PROVINCIA</th>
                        <th scope="col">PAIS</th>
                        <th scope="col">COMENTARIO</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)

                    <tr>
                    <th scope="row">{{ $user->id}}
                    
                        @if(Auth::check() && Auth::user()->isadmin())
                        <div class="input-group mb-3">
                        <a href="{{ route('updateUsers', ['id'=>$user->id]) }}"><button type="text" class="input-group-text">Editar</button></a>
                            <form action="{{ route('destroyUsers', ['id'=>$user->id]) }}" method="post">
                            @method('delete')
                            @csrf
                                <input type="submit" class="input-group-text ml-2" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario? {{ $user->name }}')" value="Eliminar">
                            </form>
                        </div>
                    @endif
                    
                    </th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->dni }}</td>
                        <td>{{ $user->membership_number }}</td>
                        <td>{{ $user->phone1 }}</td>
                        <td>{{ $user->phone2 }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->zipCode }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->region }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->notes }}</td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
    