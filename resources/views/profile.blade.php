@extends('layouts.app')

@section('content')
        <table>
            
            <div class="container ct-create">
                <div class="card-header mt-4"><label for="" class="d-flex justify-content-center text-md-right">{{ __('Mi Perfil') }}</label></div>
                    <div class="d-flex flex-column justify-content-center align-items-center ct-userProfile mb-3 p-2">

                        <div class="d-flex flex-row justify-content-between w-100 px-3">
                            <p class="txtMembership">Nº de socio {{$user->membership_number}}</p>
                            <div class="d-flex flex-row mb-3">
                                <a href="{{ route('editMyProfile', ['id'=>$user->id]) }}"><img class="icoAdmin" src="{{url('/img/edit.svg')}}" alt="Pixel perfect"></a>
                            </div>
                        </div>

                        <h5 class="userName">Hola {{$user->name}} {{$user->surname}}</h5>

                        <div class="d-flex flex-column align-items-center mt-5">
                            <img class="icoProfile" src="{{url('/img/user.svg')}}" alt="Freepik">
                            <p class="m-0">{{$user->dni}}</p>
                            <p class="m-0">{{$user->email}}</p>
                        </div>

                        <div class="d-flex flex-column align-items-center mt-3">
                            <img class="icoProfile" src="{{url('/img/phone.svg')}}" alt="Gregor Cresnar">
                            <p class="m-0">{{$user->phone1}}</p>
                            <p class="m-0">{{$user->phone2}}</p>
                        </div>

                        <div class="d-flex flex-column align-items-center my-3">
                            <img class="icoProfile" src="{{url('/img/location.svg')}}" alt="Vitaly Gorbachev">
                            <p class="m-0">{{$user->address}}</p>
                            <p class="m-0">{{$user->city}}, {{$user->region}} - {{$user->country}} ({{$user->zipCode}})</p>
                        </div>
                    
                    </div>
            </div>   
        </table>

    @endsection



    