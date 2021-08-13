@extends('layouts.layout')

@section('content')
<div class="content">
@if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <img class="logoimg" src="/img/denkpizza.png" alt="Logo">
</div>
<div class="title m-b-md">
    Denka's Pizza Corner
</div>
<div class="content"><a class="button-std btn-link" href="/pizzas/create">Order a Pizza</a></div>
<div class="content"><p class="msg">{{ session('msg') }}</p></div>

@endsection
