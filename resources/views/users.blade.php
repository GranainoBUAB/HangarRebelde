@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center" data-bs-spy="scroll">
        <div class="d-flex justify-content-center my-4 px-xxl-5">
        @if($users->isNotEmpty())
            
        @endif
            <table class="table table-sm table-hover text-center tb-usersAdmin">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">e-mail</th>
                        <th scope="col">DNI</th>
                        <th scope="col"># Socio</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Otro Teléfono</th>
                        <th scope="col">Direccón</th>
                        <th scope="col">C.P.</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">País</th>
                        {{-- <th scope="col">Comentario</th> --}}
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)

                    <tr class="">
                    <th scope="row">{{ $user->id}}</th>
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
                        {{-- <td>{{ $user->notes }}</td> --}}
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
    