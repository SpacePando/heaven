@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
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

    <div class="content">
        <img src="/img/logo.png" alt="Cloud logo">
        <div class="title m-b-md">
            Heavenly Suites
        </div>
        <p class="mssg">{{ session('mssg') }}</p>

        <div class="links">
            <a href="{{ route('Book.create')}}">Book a room</a>
            <a href="/pizzas">lets see</a>
            <a href="https://blog.laravel.com">about</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>


@endsection