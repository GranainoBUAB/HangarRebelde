@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-md-center">
                    <label for="register" class="d-flex justify-content-center mb-0 text-md-center">{{ __('Nueva Contraseña') }}</label>
                </div>
                <div class="d-flex justify-content-center align-items-center p-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="col p-0" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <p class="px-3">Dirección de e-mail</p>

                            <div class="col px-3">
                                <input id="email" type="email" class="col form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col p-0 mt-4">
                            <div class="col d-flex justify-content-start p-0">
                                <button type="submit" class="btn btn-log m-0">
                                    {{ __('Pedir nueva contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
