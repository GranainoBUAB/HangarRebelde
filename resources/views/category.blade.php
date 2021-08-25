@extends('layouts.app')

@section('content')

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <div>
        <ul>
            @foreach ($categoryMains as $categoryMain)
                <li>{{ $categoryMain->position }} -> {{ $categoryMain->category }}</li>
                @foreach ($categorySecondaries as $categorySecondary)
                    @if ($categoryMain->id === $categorySecondary->categoryMain_id)
                        <li>--------->{{ $categorySecondary->position }} -> {{ $categorySecondary->category }}</li>
                    @endif
                @endforeach

            @endforeach
        </ul>
    </div>


    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
