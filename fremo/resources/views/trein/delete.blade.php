<!-- resources/views/treinen/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Treinen</h1>

    <table>
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
            @foreach ($treinen as $trein)
                <tr>
                    <td>{{ $trein->naam_bezitter }}</td>
                    <td>{{ $trein->afkorting }}</td>
                    <td>{{ $trein->nummer_trein }}</td>
                    <td>{{ $trein->code_trein }}</td>
                    <td>{{ $trein->omschrijving }}</td>
                    <td>{{ $trein->snelheid }}</td>
                    <td>
                        <form action="{{ route('treinen.destroy', $trein->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
