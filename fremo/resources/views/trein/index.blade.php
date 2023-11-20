@extends('layouts.app')

@section('content')
    <h1>Treinen</h1>

    <div>
        <a href="{{ route('trein.new') }}">
            <button>New</button>
        </a>
    </div>

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
            @foreach ($treins as $trein)
                <tr>
                    <td>{{ $trein->naam_bezitter }}</td>
                    <td>{{ $trein->afkorting }}</td>
                    <td>{{ $trein->nummer_trein }}</td>
                    <td>{{ $trein->code_trein }}</td>
                    <td>{{ $trein->omschrijving }}</td>
                    <td>{{ $trein->snelheid }}</td>
                    <td>
                        <a href="{{ route('trein.edit', $trein->id) }}">
                            <button>Edit</button>
                        </a>
                        <form action="{{ route('trein.destroy', $trein->id) }}" method="POST">
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
