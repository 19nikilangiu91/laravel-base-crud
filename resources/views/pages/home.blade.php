@extends('layouts.main-layout')

@section('content')
<h1>Saints</h1>
<ul>
    @foreach ($saints as $saint)
        <li>
            {{ $saint -> name }} {{ $saint -> place_of_birth }} - {{ $saint -> blessing_date }} - {{ $saint -> number_of_miracles }}
        </li>
    @endforeach
</ul>
@endsection