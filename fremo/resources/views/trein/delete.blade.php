@extends('layouts.app')

@section('content')
    <h1>Delete Trein</h1>

    <p>Are you sure you want to delete the following trein?</p>

    <ul>
        <li><strong>Naam Bezitter:</strong> {{ $trein->naam_bezitter }}</li>
        <li><strong>Afkorting:</strong> {{ $trein->afkorting }}</li>
        <li><strong>Nummer Trein:</strong> {{ $trein->nummer_trein }}</li>
        <li><strong>Code Trein:</strong> {{ $trein->code_trein }}</li>
        <li><strong>Omschrijving:</strong> {{ $trein->omschrijving }}</li>
        <li><strong>Snelheid:</strong> {{ $trein->snelheid }}</li>
    </ul>

    <form action="{{ route('treinen.destroy', $trein->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Confirm Delete</button>
    </form>

    <a href="{{ route('treinen.index') }}">Cancel</a>
@endsection
