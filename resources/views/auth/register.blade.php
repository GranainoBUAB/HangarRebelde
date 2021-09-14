@extends('layouts.app')

@section('content')
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
                                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="Apellido" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                            @error('surname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" placeholder="DNI o NIE" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                            @error('dni')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password" autofocus>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Confirmar contraseña" name="password_confirmation" required autocomplete="new-password" autofocus>

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
                                            <input id="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror" placeholder="Código Postal" name="zipCode" value="{{ old('zipCode') }}" required autocomplete="zipCode" autofocus>

                                            @error('zipCode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Ciudad" name="city" value="{{ old('city') }}" required autocomplete="region" autofocus>

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" placeholder="Provincia" name="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                            @error('region')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group m-3 d-flex justify-content-center row">
                                        <div class="col-md-16">
                                            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" placeholder="País" name="country" value="{{ old('country') }}" required autocomplete="region" autofocus>

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

                    </form>
                </div>   
            </div>
        </div>
    </div>
</div>

@endsection
