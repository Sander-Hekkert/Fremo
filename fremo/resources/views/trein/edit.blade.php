@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Edit Trein</h1>

        <form action="{{ route('trein.update', $trein->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="naam_bezitter" class="form-label">Naam Bezitter:</label>
                <input type="text" name="naam_bezitter" value="{{ $trein->naam_bezitter }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="afkorting" class="form-label">Afkorting:</label>
                <input type="text" name="afkorting" value="{{ $trein->afkorting }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nummer_trein" class="form-label">Nummer Trein:</label>
                <input type="text" name="nummer_trein" value="{{ $trein->nummer_trein }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="code_trein" class="form-label">Code Trein:</label>
                <input type="text" name="code_trein" value="{{ $trein->code_trein }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="omschrijving" class="form-label">Omschrijving:</label>
                <input type="text" name="omschrijving" value="{{ $trein->omschrijving }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="snelheid" class="form-label">Snelheid:</label>
                <input type="text" name="snelheid" value="{{ $trein->snelheid }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Trein</button>
        </form>
    </div>
@endsection
