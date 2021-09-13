@extends('layouts.app')

@section('content')
    <x-header />
    <div class="d-flex flex-wrap row justify-content-center"  data-bs-spy="scroll">
        <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
            @foreach ($users as $user)
                <ul>
                    <li>{{ $user->name }}</li>
                    <li>{{ $user->surname }}</li>
                    <li>{{ $user->email }}</li>
                </ul>
            @endforeach




                    {{-- <div class="ct-img">
                        <a href="{{ route('show', ['id' => $user->id]) }}">
                            <img class="imgCard" src="{{ asset('storage') . '/' . $user->name }}" alt="">
                        </a>
                    </div>
                    <div class="ct-info d-flex flex-row align-items-center p-1">
                        <div class="ct-txt d-flex flex-column justify-content-center">
                            <div class="txtTitle d-flex flex-row align-items-center">
                                <p class="txtInfoTitle text-truncate m-0">{{ $user->surname }} </p>
                            </div>
                            <p class="txtPrice">{{ $user->surname }} &#8364</p>
                        </div>
                        <div class="separator"></div>
                            <a href="{{ route('addCart', ['product_id'=>$user->email]) }}"> 
                                <img class="icoCard m-1" src="<?php echo asset('storage/img/shopping-cart.svg'); ?>" alt="Flaticon">
                            </a>
                    </div>
                 --}}
        </div>
    <x-footer />
    @endsection
    