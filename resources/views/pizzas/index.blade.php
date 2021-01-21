@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index container">
  <img src="/img/small-logo.png" class="mb-5" alt="logo">
  <h1>Pizza Orders</h1>
  @if ($message = Session::get('message'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>
  @endif
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="{{ route('pizzas.show', $pizza->id) }}">{{ $pizza->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection