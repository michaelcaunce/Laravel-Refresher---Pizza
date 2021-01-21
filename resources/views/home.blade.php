@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <img src="/img/small-logo.png" class="mb-5" alt="logo">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p>
                        <a href="/pizzas">View All Pizza Orders</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection