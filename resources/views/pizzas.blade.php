@extends('layouts.layout')
@section('content')
<p>Middle part</p>
    {{-- Foreach loop, looks more like python --}}
    @foreach($pizzas as $pizza)
        <div>
            <!-- Get the index of the loop, $loop is an internal variable -->
            {{ $loop->index }} -->
            {{ $pizza['type']}} -- {{ $pizza['base']}}
            @if($loop->first)
                <span>First in the loop</span>
            @endif
            @if($loop->last)
                <span>Last of the Mohicans</span>
            @endif
        </div>
    @endforeach    
@endsection