@extends('layouts.layout')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza!</h1>
    <form action="/pizzas" method="POST">
        <!--
            Important! the cross reference forgery!
            If not specified, the error 419 : Page Expired will fire!
        -->
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawai</option>
            <option value="Pepperoni">Pepperoni</option>
        </select>
        <div>
        <label for="base">Choose pizza type:</label>
        <select name="base" id="base">
            <option value="thin">Thin</option>
            <option value="thick">Thick</option>
            <option value="cheese">Cheesy crust</option>
        </select>
        </div>
        <fieldset>
            <label>Extra toppings:</label><br/>
            <!--
                Notice the [] at the end of the name, if this is not added,
                Laravel would only remember the last value in the controller.
             -->
            <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" class="button-std btn-ok" value="Order Now!">
    </form>
</div>
@endsection
