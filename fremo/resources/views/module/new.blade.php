@extends('layouts.app')

@section('content')
    <h1>Create New Module</h1>

    <form action="{{ route('module.store') }}" method="POST">
        @csrf

        <label for="naam_bezitter">Naam Bezitter:</label>
        <input type="text" name="naam_bezitter" required>
        <br>

        <label for="nummer_module">Nummer Module:</label>
        <input type="text" name="nummer_module" required>
        <br>

        <label for="e_f">E-F:</label>
        <input type="text" name="e_f" required>
        <br>

        <label for="opmerkingen_bijzonderheden">Opmerkingen Bijzonderheden:</label>
        <textarea name="opmerkingen_bijzonderheden" required></textarea>
        <br>

        <label for="aantal_sporen_begin">Aantal Sporen Begin:</label>
        <input type="text" name="aantal_sporen_begin" required>
        <br>

        <label for="aantal_sporen_eind">Aantal Sporen Eind:</label>
        <input type="text" name="aantal_sporen_eind" required>
        <br>
        
        <button type="submit">Create Module</button>
    </form>
@endsection
