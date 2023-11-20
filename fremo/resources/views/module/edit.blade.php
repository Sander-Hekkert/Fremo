@extends('layouts.app')

@section('content')
    <h1>Edit Module</h1>

    <form action="{{ route('module.update', $module->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="naam_bezitter">Naam Bezitter:</label>
        <input type="text" name="naam_bezitter" value="{{ $module->naam_bezitter }}" required>
        <br>

        <label for="afkorting">Afkorting:</label>
        <input type="text" name="afkorting" value="{{ $module->afkorting }}" required>
        <br>

        <label for="nummer_module">Nummer Module:</label>
        <input type="text" name="nummer_module" value="{{ $module->nummer_module }}" required>
        <br>

        <label for="naam_thema_module">Naam Thema Module:</label>
        <input type="text" name="naam_thema_module" value="{{ $module->naam_thema_module }}" required>
        <br>

        <label for="lengte_1">Lengte 1:</label>
        <input type="text" name="lengte_1" value="{{ $module->lengte_1 }}" required>
        <br>

        <label for="lengte_2">Lengte 2:</label>
        <input type="text" name="lengte_2" value="{{ $module->lengte_2 }}" required>
        <br>

        <label for="lengte_3">Lengte 3:</label>
        <input type="text" name="lengte_3" value="{{ $module->lengte_3 }}" required>
        <br>

        <label for="e_f">E-F:</label>
        <input type="text" name="e_f" value="{{ $module->e_f }}" required>
        <br>

        <label for="hoek">Hoek:</label>
        <input type="text" name="hoek" value="{{ $module->hoek }}" required>
        <br>

        <label for="straal">Straal:</label>
        <input type="text" name="straal" value="{{ $module->straal }}" required>
        <br>

        <label for="type_eindprofiel_1">Type Eindprofiel 1:</label>
        <input type="text" name="type_eindprofiel_1" value="{{ $module->type_eindprofiel_1 }}" required>
        <br>

        <label for="type_eindprofiel_2">Type Eindprofiel 2:</label>
        <input type="text" name="type_eindprofiel_2" value="{{ $module->type_eindprofiel_2 }}" required>
        <br>

        <label for="bovenbouw_rails">Bovenbouw Rails:</label>
        <input type="text" name="bovenbouw_rails" value="{{ $module->bovenbouw_rails }}" required>
        <br>

        <label for="opmerkingen_bijzonderheden">Opmerkingen Bijzonderheden:</label>
        <textarea name="opmerkingen_bijzonderheden" required>{{ $module->opmerkingen_bijzonderheden }}</textarea>
        <br>

        <label for="aantal_sporen">Aantal Sporen:</label>
        <input type="text" name="aantal_sporen" value="{{ $module->aantal_sporen }}" required>
        <br>

        <button type="submit">Update Module</button>
    </form>
@endsection
