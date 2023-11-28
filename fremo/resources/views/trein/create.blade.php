@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Create New Trein</h1>

        <form action="{{ route('treins.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="mb-3">
                <label for="naam_bezitter" class="form-label">Naam Bezitter:</label>
                <input type="text" name="naam_bezitter" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="afkorting" class="form-label">Afkorting:</label>
                <input type="text" name="afkorting" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nummer_trein" class="form-label">Nummer Trein:</label>
                <input type="text" name="nummer_trein" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="code_trein" class="form-label">Code Trein:</label>
                <input type="text" name="code_trein" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="omschrijving" class="form-label">Omschrijving:</label>
                <input type="text" name="omschrijving" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="snelheid" class="form-label">Snelheid:</label>
                <input type="text" name="snelheid" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Trein</button>
        </form>
    </div>
@endsection
