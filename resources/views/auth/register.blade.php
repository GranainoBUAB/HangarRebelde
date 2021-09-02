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
                            <label for="name" class="border col-md-4 col-form-label text-md-center">{{ __('Name') }}</label>

                            <div class="col-md-8 ">
                                <input id="name" type="text" class=" form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="email" class="border col-md-4 col-form-label text-md-center ">{{ __('E-Mail Address') }}</label>

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
                            <label for="password" class=" border col-md-4 col-form-label text-md-center">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="border col-md-4 col-form-label text-md-center">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="dni" class="border col-md-4 col-form-label text-md-center" >{{ __('DNI') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="border col-md-4 col-form-label text-md-center" >{{ __('Phone') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="address" class="border col-md-4 col-form-label text-md-center" >{{ __('Address') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="zipCode" class="border col-md-4 col-form-label text-md-center" >{{ __('Postal') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="zipCode" type="text" class="form-control @error('zipCode') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('zipCode')
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
                            <label for="region" class="border col-md-4 col-form-label text-md-center" >{{ __('Region') }}</label>

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
                            <label for="country" class="border col-md-4 col-form-label text-md-center" >{{ __('Pais') }}</label>

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
                            <label for="notes" class="border col-md-4 col-form-label text-md-center" >{{ __('Notes') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="notes" type="text" class="form-control @error('notes') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('notes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deliveryName" class="border col-md-4 col-form-label text-md-center" >{{ __('deliveryName') }}</label>

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
                            <label for="deliverySurname" class="border col-md-4 col-form-label text-md-center" >{{ __('deliverySurname') }}</label>

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
                            <label for="deliveryAddress" class="border col-md-4 col-form-label text-md-center" >{{ __('deliveryAddress') }}</label>

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
                            <label for="deliveryZipCode" class="border col-md-4 col-form-label text-md-center" >{{ __('deliveryZipCode') }}</label>

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
                            <label for="deliveryCity" class="border col-md-4 col-form-label text-md-center" >{{ __('deliveryCity') }}</label>

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
                            <label for="deliveryRegion" class="border col-md-4 col-form-label text-md-center" >{{ __('deliveryRegion') }}</label>

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
                            <label for="deliveryCountry" class="border col-md-4 col-form-label text-md-center" >{{ __('deliveryCountry') }}</label>

                            <div class="col-md-8 m-0">
                                <input id="deliveryCountry" type="text" class="form-control @error('deliveryCountry') is-invalid @enderror" region="region" value="{{ old('region') }}" required autocomplete="region" autofocus>

                                @error('deliveryCountry')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
