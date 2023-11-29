@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="my-4">Create Wagenkaart Entry</h1>

        <form action="{{ route('wagenkaart.store') }}" method="POST">
            @csrf

            <!-- Add your form fields here -->
            <div class="mb-3">
                <label for="naam_bezitter" class="form-label">Naam Bezitter:</label>
                <input type="text" class="form-control" id="naam_bezitter" name="naam_bezitter" required>
            </div>

            <div class="mb-3">
                <label for="naam" class="form-label">Naam:</label>
                <input type="text" class="form-control" id="naam" name="naam" required>
            </div>

            <!-- Add other form fields based on your table columns -->

            <button type="submit" class="btn btn-primary">Create Entry</button>
        </form>
    </div>
@endsection
