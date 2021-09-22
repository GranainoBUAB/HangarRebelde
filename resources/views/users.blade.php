@extends('layouts.app')

@section('content')
    <li class="nav-item" role="presentation">
        <form class="d-flex align-items-center inputSearch ml-5" action="{{route('searchUsers')}}">
            <div class="form-group ct-search">
                <input class="form-control me-1 inputSearch" name = "query" type="text" placeholder="Buscar" aria-label="Search">
            </div>
            <button class="btn-lupa position-relative" type="submit" class="btn btn-default">
                <img class="imgcarrito" src="{{url('/img/lupa.png')}}" alt="">
            </button>
        </form>
    </li>
    <div class="d-flex justify-content-center" data-bs-spy="scroll">
        <div class="d-flex justify-content-center my-4 px-xxl-5">
            <table class="table table-sm table-hover text-center tb-usersAdmin">
                <thead>
                    <tr class="table-warning">
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">e-mail</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Socio</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Otro Teléfono</th>
                        <th scope="col">Direccón</th>
                        <th scope="col">C.P.</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">País</th>
                        <th scope="col">Reserva</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr class="">
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
                        @if($user->canReserve)
                            <td>Sí</td>
                        @else
                            <td>No</td>
                        @endif
                        @if(Auth::check() && Auth::user()->isadmin())
                            <td>
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                <a href="{{ route('editUser', ['id'=>$user->id]) }}"><img class="icoAdmin" src="{{url('/img/edit.svg')}}" alt="Pixel perfect"></a>
                                    <form action="{{ route('destroyUsers', ['id'=>$user->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn px-2 py-0" type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario? {{ $user->name }}')"><img class="icoAdmin" src="{{url('/img/papelera-cerrada.svg')}}" alt="Freepik"></button>
                                    </form>
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection



