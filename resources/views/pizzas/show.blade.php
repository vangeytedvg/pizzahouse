@extends('layouts.layout')
@section('content')
<!-- We get this info from the PizzaController/show method -->
    <div class="wrapper pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">Type = {{ $pizza->type }}</p>
        <p class="type">Base = {{ $pizza->base }}</p>
        <p class="toppings">Extra Toppings:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
            @endforeach
        </ul>
    </div>
    <a href="/pizzas" class="button-std btn-ok">Back To Menu</a>
@endsection
