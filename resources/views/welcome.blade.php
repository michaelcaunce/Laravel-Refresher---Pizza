@extends('layouts.layout')

@section('content')
<div class="hero">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="login top-right links">
                @auth
                    <a class="text-black" href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <!-- Masthead-->
        <header class="masthead">
            <div class="h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="container col-lg-10 align-self-end">
                        <img class="welcome-logo" src="/img/welcome-logo.png" alt="pizza house logo">
                        @if ($message = Session::get('message'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                        {{-- <h1 class="text-uppercase text-white font-weight-bold">Welcome To Pomodoro Pizza</h1> --}}
                        {{-- <hr class="divider my-4" /> --}}
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white font-weight-light mb-5">At Pomodoro, we aspire to the Italian way of cooking and eating, where location and seasonality dictate your ingredients. You eat the vegetables that are grown near you and stray from the ones that are not. The seasons and your land will tell you which ingredients to prepare. That process is carried through every decision we make because it is the ingredients we use that help us create the best possible food.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('pizzas.create')}}">Order Pizza</a>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

@endsection