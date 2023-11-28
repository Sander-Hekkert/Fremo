@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-2">Create New Module</h1>

        <form action="{{ route('module.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="mb-2">
                <label for="naam_bezitter" class="form-label">Naam Bezitter:</label>
                <input type="text" name="naam_bezitter" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="naam" class="form-label">Naam Module:</label>
                <input type="text" name="naam" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="nummer_module" class="form-label">Nummer Module:</label>
                <input type="text" name="nummer_module" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="e_f" class="form-label">E-F:</label>
                <input type="text" name="e_f" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="opmerkingen_bijzonderheden" class="form-label">Opmerkingen Bijzonderheden:</label>
                <textarea name="opmerkingen_bijzonderheden" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-2">
                <label for="aantal_sporen_begin" class="form-label">Aantal Sporen Begin:</label>
                <input type="text" name="aantal_sporen_begin" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="aantal_sporen_eind" class="form-label">Aantal Sporen Eind:</label>
                <input type="text" name="aantal_sporen_eind" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Module</button>
        </form>
    </div>
@endsection
