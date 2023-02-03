@extends('layouts.main-layout')

@section('content')
<div>
    <h1 class="text">Create your Saint</h1>
    <form method="POST" action="{{route('saint.store')}}">
        @csrf
        <label for="name">Name</label>
        <input class="name" type="text" name="name">
        <br>
        <label for="placeOfBirth">Place of Birth</label>
        <input class="place" type="text" name="place_of_birth">
        <br>
        <label for="blessingDate">Blessing date</label>
        <input class="blessing" type="date" name="blessing_date">
        <br>
        <label for="numberOfMiracle">Number Of Miracle</label>
        <input class="miracles" type="number" name="number_of_miracles">
        <br>
        <input class="button" type="submit" value="Create you Saint">
    </form>
</div>
@endsection 