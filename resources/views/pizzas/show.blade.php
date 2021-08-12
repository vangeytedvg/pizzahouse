@extends('layouts.layout')
@section('content')
<!-- We get this info from the PizzaController/show method -->
    <div class="wrapper pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">Type = {{ $pizza->type }}</p>
        <p class="type">Base = {{ $pizza->base }}</p>
    </div>
    <a href="/pizzas" class="button-normal">Back To Menu</a>
@endsection
