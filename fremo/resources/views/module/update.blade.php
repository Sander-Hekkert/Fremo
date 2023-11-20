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

        <!-- Add other input fields for the remaining attributes -->

        <button type="submit">Update Module</button>
    </form>
@endsection
