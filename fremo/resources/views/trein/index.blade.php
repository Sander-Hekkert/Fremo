@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="my-4">Treinen</h1>

        <div class="mb-4">
            <a href="{{ route('trein.new') }}" class="btn btn-primary">New</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Naam Bezitter</th>
                <th>Afkorting</th>
                <th>Nummer Trein</th>
                <th>Code Trein</th>
                <th>Omschrijving</th>
                <th>Snelheid</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($treins as $trein)
                <tr>
                    <td>{{ $trein->naam_bezitter }}</td>
                    <td>{{ $trein->afkorting }}</td>
                    <td>{{ $trein->nummer_trein }}</td>
                    <td>{{ $trein->code_trein }}</td>
                    <td>{{ $trein->omschrijving }}</td>
                    <td>{{ $trein->snelheid }}</td>
                    <td>
                        <a href="{{ route('trein.edit', $trein->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('trein.destroy', $trein->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
