@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header text-md-center">
                    <label for="register" class="d-flex justify-content-center mb-0  text-md-center " >{{ __('Registrate') }}</label>

                </div>

                <div class="card-body-form d-flex">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- @method('patch') --}}
                            <div class="side">
                                <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16 ">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="Apellido" name="surname" value="{{ old('surname') }}" required autocomplete="surname">

                                            @error('surname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" placeholder="DNI o NIE" dni="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                            @error('dni')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Confirmar contraseña" name="password_confirmation" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="membership-number" type="text" class="form-control @error('membership') is-invalid @enderror" placeholder="Número de socio" name="membership_number" required autocomplete="membership_number">

                                            @error('membership')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Dirección" address="address" value="{{ old('address') }}" required autocomplete="region" autofocus>

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror" placeholder="Código Postal" zipCode="zipCode" value="{{ old('zipCode') }}" required autocomplete="zipCode" autofocus>

                                            @error('zipCode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Ciudad" city="city" value="{{ old('city') }}" required autocomplete="region" autofocus>

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" placeholder="Provincia" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                            @error('region')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" placeholder="País" country="country" value="{{ old('country') }}" required autocomplete="region" autofocus>

                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Teléfono  Movil" phone="phone1" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Otro Teléfono " phone="phone2" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group m-3">
                                    <div class="btn-clic col-md-16">
                                        <button type="submit" class="btn btn-log ">
                                            {{ __('Registrarse') }}
                                        </button>
                                        <div class="text-login">
                                            <a href="login" >¿Ya estás Registrado? Inicia sesión</a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        {{-- <div class="form-group m-2 d-flex justify-content-center row">
                            <label for="notes" class=" col-md-8 col-form-label text-md-center mb-3" >{{ __('Comentario') }}</label>

                            <div class="col-md-16  mb-8 ">
                                <textarea id="notes" type="text" class="form-control @error('notes') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus></textarea>

                                @error('notes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- button registar --}}


                        <br>

                    </form>
                    </div>
                </div>
        </div>
    </div>
</div>
<br>

@endsection



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
