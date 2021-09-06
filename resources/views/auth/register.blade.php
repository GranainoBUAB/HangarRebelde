@extends('layouts.app')

@section('content')
<x-header />
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header text-md-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @method('patch')
                        <div class="form-group row ">
                            <label for="name" class="border col-md-4 col-form-label text-md-center">{{ __('Nombre') }}</label>

                            <div class="col-md-8 ">
                                <input id="surname" type="text" class=" form-control @error('surname') is-invalid @enderror" name="name" value="{{ old('Apellidos') }}" required autocomplete="name" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surname" class="border col-md-4 col-form-label text-md-center" >{{ __('Apellidos') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" surname="surname" value="{{ old('surname') }}" required autocomplete="region" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="email" class="border col-md-4 col-form-label text-md-center ">{{ __('E-Mail') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class=" border col-md-4 col-form-label text-md-center">{{ __('Contraseña') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="border col-md-4 col-form-label text-md-center">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="dni" class="border col-md-4 col-form-label text-md-center" >{{ __('DNI o NIE') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" dni="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="border col-md-4 col-form-label text-md-center" >{{ __('Telefono de contacto') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" phone="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="zipCode" class="border col-md-4 col-form-label text-md-center" >{{ __('Código Postal') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror" zipCode="zipCode" value="{{ old('zipCode') }}" required autocomplete="zipCode" autofocus>

                                @error('zipCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="address" class="border col-md-4 col-form-label text-md-center" >{{ __('Dirección') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" address="address" value="{{ old('address') }}" required autocomplete="region" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="city" class="border col-md-4 col-form-label text-md-center" >{{ __('Ciudad') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="region" class="border col-md-4 col-form-label text-md-center" >{{ __('Provincia') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="country" class="border col-md-4 col-form-label text-md-center" >{{ __('País') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="notes" class="border col-md-4 col-form-label text-md-center" >{{ __('Comentario') }}</label>

                            <div class="col-md-8 m-0">
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
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-log">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<x-footer />
@endsection
