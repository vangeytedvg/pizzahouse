@extends('layouts.layout')
@section('content')
<div class="wrapper pizza-index">
    {{-- Foreach loop, looks more like python --}}
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
        <div>
            <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a>
        </div>
    @endforeach
</div>
@endsection
