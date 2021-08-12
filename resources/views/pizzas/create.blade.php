@extends('layouts.layout')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza!</h1>
    <form action="" method="">
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
        <input type="submit" class="button-std btn-ok" value="Order Now!">
    </form>
</div>
@endsection
