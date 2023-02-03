@extends('layouts.main-layout')

@section('content')
<div>
    <h1>Saints</h1>
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="{{ route('saint.show', ['id' => $saint -> id]) }}">
                    Saint: {{ $saint -> name }} <br>
                    Number of Miracles: {{ $saint -> number_of_miracles }}
                </a>
            </li>
            <br>
        @endforeach
    </ul>
</div>

@endsection