@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza container">
    <img src="/img/small-logo.png" class="mb-5" alt="logo">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Your Pizza Type:</label>
        <select name="type" id="type">
            <option value="Margherita">Margherita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Pepperoni">Pepperoni</option>
            <option value="Volcano">Volcano</option>
        </select>
        <label for="type">Choose Your Base Type:</label>
        <select name="base" id="base">
            <option value="Cheesy Crust">Cheesy Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
            <option value="Thin">Thin</option>
            <option value="Deep">Deep</option>
        </select>
        <fieldset>
            <label>Extra Toppings:</label><br />
            <input type="checkbox" name="toppings[]" value="None">None<br />
            <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="Pineapple">Pineapple<br />
            <input type="checkbox" name="toppings[]" value="Pepperoni">Pepperoni<br />
            <input type="checkbox" name="toppings[]" value="Sweetcorn">Sweetcorn<br />
            <input type="checkbox" name="toppings[]" value="Peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="Ham">Ham<br />
            <input type="checkbox" name="toppings[]" value="Spicy Beef">Spicy Beef<br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
