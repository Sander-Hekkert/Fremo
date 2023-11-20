@extends('layouts.app')

@section('content')
    <h1>Create New Trein</h1>

    <form action="{{ route('trein.store') }}" method="POST">
        @csrf

        <label for="naam_bezitter">Naam Bezitter:</label>
        <input type="text" name="naam_bezitter" required>
        <br>

        <label for="afkorting">Afkorting:</label>
        <input type="text" name="afkorting" required>
        <br>

        <label for="nummer_trein">Nummer Trein:</label>
        <input type="text" name="nummer_trein" required>
        <br>

        <label for="code_trein">Code Trein:</label>
        <input type="text" name="code_trein" required>
        <br>

        <label for="omschrijving">Omschrijving:</label>
        <input type="text" name="omschrijving" required>
        <br>

        <label for="snelheid">Snelheid:</label>
        <input type="text" name="snelheid" required>
        <br>

        <button type="submit">Create Trein</button>
    </form>
@endsection
