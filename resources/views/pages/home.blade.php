@extends('layouts.main-layout')

@section('content')
<div>
    <a class="create" href="/saint/create/">
        <h1 class="text">Click me and try to create your Saint</h1>
    </a>
    <h1>Saints</h1>
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="{{ route('saint.show', ['id' => $saint -> id]) }}">
                    Saint: {{ $saint -> name }} <br>
                    Number of Miracles: {{ $saint -> number_of_miracles }}
                </a>
                <a  class ="delete" href="{{ route('saint.destroy', ['id' => $saint -> id]) }}">X</a>
            </li>
            <br>
        @endforeach
    </ul>
</div>

@endsection