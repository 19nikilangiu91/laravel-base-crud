@extends('layouts.main-layout')

@section('content')
<h1>Saints</h1>
<ul>
    @foreach ($saints as $saint)
        <li>
            Saint: {{ $saint -> name }} <br>
            Place of Birth: {{ $saint -> place_of_birth }} <br>
            Blessing Date: {{ $saint -> blessing_date }} <br>
            Number of Miracles: {{ $saint -> number_of_miracles }}
        </li>
        <br>
    @endforeach
</ul>
@endsection