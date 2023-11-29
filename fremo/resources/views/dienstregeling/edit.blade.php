@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Project bewerken - ID: {{ $project->id }}</h1>

        <div class="row">
            <!-- Proces kolom -->
            <div class="col-md-6">
                <h2>Proces</h2>
                <div class="d-grid gap-2 col-6">
                    <a href="{{ route('projectedit.title', ['id' => $project->id]) }}" class="btn btn-primary" type="button">Titelpagina</a>
                    <a href="{{ route('wegdiagram.edit', ['id' => $project->id]) }}" class="btn btn-primary" type="button">Wegdiagram</a>
                    <a href="{{ route('tijddiagram.edit', ['id' => $project->id]) }}" class="btn btn-primary" type="button">Tijddiagram</a>
                </div>
            </div>


            <div class="col-md-6">
                <h2>Bestanden</h2>

            </div>
        </div>
    </div>
@endsection
