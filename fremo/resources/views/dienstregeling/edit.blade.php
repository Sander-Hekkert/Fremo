@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Project bewerken - ID: {{ $project->id }}</h1>

        <div class="row">
            <!-- Proces kolom -->
            <div class="col-md-6">
                <h2>Proces</h2>
                <div class="d-grid gap-2 col-6">
                    <a href="{{ route('projectedit.title', ['id' => $project->id]) }}"><button class="btn btn-primary" type="button">Titelpagina</button></a>
                    <button class="btn btn-primary" type="button">Weg diagram</button>
                    <button class="btn btn-primary" type="button">Tijd diagram</button>
                </div>
            </div>


            <div class="col-md-6">
                <h2>Bestanden</h2>

            </div>
        </div>
    </div>
@endsection
