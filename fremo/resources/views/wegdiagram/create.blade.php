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

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>

    <hr>

    <a href="{{ route('wegdiagram.downloadPDF', ['project_id' => $project_id]) }}" class="btn btn-success">
        Download PDF
    </a>
@endsection
