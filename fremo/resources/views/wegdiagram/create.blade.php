<!-- resources/views/wegdiagram/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <form action="{{ route('wegdiagram.store') }}" method="post">
        @csrf

        <input type="hidden" name="project_id" value="{{ $project_id }}">

        <label for="starttijd">Starttijd:</label>
        <input type="datetime-local" name="starttijd" required>

        <label for="eindtijd">Eindtijd:</label>
        <input type="datetime-local" name="eindtijd" required>

        <label for="trein">Selecteer een trein:</label>
        <select name="trein">
            @foreach($treinen as $trein)
                <option value="{{ $trein->id }}">{{ $trein->naam }}</option>
            @endforeach
        </select>

        <label for="station">Selecteer een station:</label>
        <select name="station">
            @foreach($stations as $station)
                <option value="{{ $station->id }}">{{ $station->naam }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>

    <hr>

    <a href="{{ route('wegdiagram.downloadPDF', ['project_id' => $project_id]) }}" class="btn btn-success">
        Download PDF
    </a>
@endsection
