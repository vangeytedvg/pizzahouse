@extends('layouts.layout')
@section('content')
<p>Hello {{ $name }} {{$age}}</p>
    {{-- Foreach loop, looks more like python --}}
    @foreach($pizzas as $pizza)
        <div>
            {{ $pizza->name }} -- {{ $pizza->type }} -- {{ $pizza->price }}
        </div>
    @endforeach
@endsection
