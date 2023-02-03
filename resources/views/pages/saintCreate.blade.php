@extends('layouts.main-layout')

@section('content')
<div>
    <h1 class="text">Create your Saint</h1>
    <form>
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="placeOfBirth">Place of Birth</label>
        <input type="text" name="place_of_birth">
        <br>
        <label for="blessingDate">Blessing date</label>
        <input type="date" name="blessing_date">
        <br>
        <label for="numberOfMiracle">Number Of Miracle</label>
        <input type="number" name="number_of_miracles">
        <br>
        <input type="submit" value="Create you Saint">
    </form>
</div>
@endsection 