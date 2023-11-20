@extends('layouts.app')

@section('content')
    <h1>Update Trein</h1>

    <form action="{{ route('treins.update', $trein->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="naam_bezitter">Naam Bezitter:</label>
        <input type="text" name="naam_bezitter" value="{{ $trein->naam_bezitter }}" required>
        <br>

        <label for="afkorting">Afkorting:</label>
        <input type="text" name="afkorting" value="{{ $trein->afkorting }}" required>
        <br>

        <label for="nummer_trein">Nummer Trein:</label>
        <input type="text" name="nummer_trein" value="{{ $trein->nummer_trein }}" required>
        <br>

        <label for="code_trein">Code Trein:</label>
        <input type="text" name="code_trein" value="{{ $trein->code_trein }}" required>
        <br>

        <label for="omschrijving">Omschrijving:</label>
        <input type="text" name="omschrijving" value="{{ $trein->omschrijving }}" required>
        <br>

        <label for="snelheid">Snelheid:</label>
        <input type="text" name="snelheid" value="{{ $trein->snelheid }}" required>
        <br>

        <button type="submit">Update Trein</button>
    </form>
@endsection
