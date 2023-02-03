@extends('layouts.main-layout')

@section('content')
<div>
    <h1>Saint</h1>
    <ul>
        <li>
            Saint: {{ $saint -> name }} <br>
            Place of Birth: {{ $saint -> place_of_birth }} <br>
            Blessing Date: {{ $saint -> blessing_date }} <br>
            Number of Miracles: {{ $saint -> number_of_miracles }}
        </li>
    </ul>
</div>
