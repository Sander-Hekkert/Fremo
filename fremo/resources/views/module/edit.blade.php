@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Edit Module</h1>

        <form action="{{ route('module.update', $module->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="naam_bezitter" class="form-label">Naam Bezitter:</label>
                <input type="text" name="naam_bezitter" value="{{ $module->naam_bezitter }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="naam_module" class="form-label">Naam Module:</label>
                <input type="text" name="naam_module" value="{{ $module->naam_module }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nummer_module" class="form-label">Nummer Module:</label>
                <input type="text" name="nummer_module" value="{{ $module->nummer_module }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="e_f" class="form-label">E-F:</label>
                <input type="text" name="e_f" value="{{ $module->e_f }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="opmerkingen_bijzonderheden" class="form-label">Opmerkingen Bijzonderheden:</label>
                <textarea name="opmerkingen_bijzonderheden" class="form-control" required>{{ $module->opmerkingen_bijzonderheden }}</textarea>
            </div>

            <div class="mb-3">
                <label for="aantal_sporen_begin" class="form-label">Aantal Sporen Begin:</label>
                <input type="text" name="aantal_sporen_begin" value="{{ $module->aantal_sporen_begin }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="aantal_sporen_eind" class="form-label">Aantal Sporen Eind:</label>
                <input type="text" name="aantal_sporen_eind" value="{{ $module->aantal_sporen_eind }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Module</button>
        </form>
    </div>
@endsection
