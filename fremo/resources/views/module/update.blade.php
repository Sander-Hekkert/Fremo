@extends('layouts.app')

@section('content')
    <h1>Edit Module</h1>

<form action="{{ route('module.update', $module->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="naam_bezitter">Naam Bezitter:</label>
        <input type="text" name="naam_bezitter" value="{{ $module->naam_bezitter }}" required>
        <br>

        <label for="naam_module">Naam Module:</label>
        <input type="text" name="naam_module" value="{{ $module->naam_module }}" required>
        <br>

        <label for="nummer_module">Nummer Module:</label>
        <input type="text" name="nummer_module" value="{{ $module->nummer_module }}" required>
        <br>

        <label for="e_f">E-F:</label>
        <input type="text" name="e_f" value="{{ $module->e_f }}" required>
        <br>

        <label for="opmerkingen_bijzonderheden">Opmerkingen Bijzonderheden:</label>
        <textarea name="opmerkingen_bijzonderheden" required>{{ $module->opmerkingen_bijzonderheden }}</textarea>
        <br>

        <label for="aantal_sporen_begin">Aantal Sporen Begin:</label>
        <input type="text" name="aantal_sporen_begin" value="{{ $module->aantal_sporen_begin }}" required>
        <br>

       <label for="aantal_sporen_eind">Aantal Sporen Eind:</label>
        <input type="text" name="aantal_sporen_eind" value="{{ $module->aantal_sporen_eind }}" required>
        <br>

        <button type="submit">Update Module</button>
    </form>

@endsection
