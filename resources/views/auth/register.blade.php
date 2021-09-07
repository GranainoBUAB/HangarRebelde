@extends('layouts.app')

@section('content')
<x-header />
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header text-md-center">{{ __('Registro de Usuario') }}</div>

                <div class="card-body-form d-flex">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @method('patch')
<div class="side">
    <div class="form-left">
        <div class="form-group m-5">
            <label for="name" class="col-md-8 col-form-label text-md-center mb-3 ">{{ __('Nombre') }}</label>

            <div class="col-md-16 ">
                <input id="name" type="text" class=" form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group m-5">
            <label for="surname" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Apellidos') }}</label>

            <div class="col-md-16">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" surname="surname" value="{{ old('surname') }}" required autocomplete="region" autofocus>

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group m-5 ">
            <label for="email" class=" col-md-8 col-form-label text-md-center mb-3">{{ __('E-Mail') }}</label>

            <div class="col-md-16">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group m-5">
            <label for="password" class="  col-md-8 col-form-label text-md-center mb-3">{{ __('Contraseña') }}</label>

            <div class="col-md-16">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group m-5">
            <label for="password-confirm" class=" col-md-8 col-form-label text-md-center mb-3">{{ __('Confirmar contraseña') }}</label>

            <div class="col-md-16">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        </div>
        <div class="form-group m-5">
            <label for="dni" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('DNI o NIE') }}</label>

            <div class="col-md-16">
                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" dni="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                @error('dni')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>

    <div class="form-right">
        <div class="form-group m-5">
        <label for="phone" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Telefono') }}</label>

        <div class="col-md-16">
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" phone="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>
        <div class="form-group m-5">
            <label for="zipCode" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Código Postal') }}</label>

            <div class="col-md-16">
                <input id="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror" zipCode="zipCode" value="{{ old('zipCode') }}" required autocomplete="zipCode" autofocus>

                @error('zipCode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group m-5">
            <label for="address" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Dirección') }}</label>

            <div class="col-md-16">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" address="address" value="{{ old('address') }}" required autocomplete="region" autofocus>

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group m-5">
            <label for="city" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Ciudad') }}</label>

            <div class="col-md-16">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group m-5">
            <label for="region" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Provincia') }}</label>

            <div class="col-md-16">
                <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                @error('region')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group m-5">
            <label for="country" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('País') }}</label>

            <div class="col-md-16">
                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                @error('country')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>
</div>


<div class="form-group m-5">
    <label for="notes" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Comentario') }}</label>

    <div class="col-md-16">
        <input id="notes" type="text" class="form-control @error('notes') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

        @error('notes')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



                        {{-- <div class="form-group row">
                            <label for="deliveryName" class="border col-md-4 col-form-label text-md-center" >{{ __('Nombre de entrega') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliveryName" type="text" class="form-control @error('deliveryName') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliveryName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deliverySurname" class="border col-md-4 col-form-label text-md-center" >{{ __('Apellido de entrega') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliverySurname" type="text" class="form-control @error('deliverySurname') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliverySurname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="deliveryAddress" class="border col-md-4 col-form-label text-md-center" >{{ __('Direction de entrega') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliveryAddress" type="text" class="form-control @error('deliveryAddress') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliveryAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deliveryZipCode" class="border col-md-4 col-form-label text-md-center" >{{ __('Codigo postal de entrega') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliveryZipCode" type="text" class="form-control @error('deliveryZipCode') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliveryZipCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="deliveryCity" class="border col-md-4 col-form-label text-md-center" >{{ __('Ciudad de entrega') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliveryCity" type="text" class="form-control @error('deliveryCity') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliveryCity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deliveryRegion" class="border col-md-4 col-form-label text-md-center" >{{ __('Region de entrega') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliveryRegion" type="text" class="form-control @error('deliveryRegion') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliveryRegion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="deliveryCountry" class="border col-md-4 col-form-label text-md-center" >{{ __('Pais de entrega') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliveryCountry" type="text" class="form-control @error('deliveryCountry') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliveryCountry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

{{-- button registar --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-log">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<x-footer />
@endsection
