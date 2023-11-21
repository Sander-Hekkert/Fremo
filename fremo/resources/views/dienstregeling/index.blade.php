@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-2">

                <a href="{{ route('project.index') }}" class="btn btn-primary">
                    New
                </a>
            </div>
            <div class="col-8 offset-1">
                <table class="table">
                    <thead>
                    <h1 class="mt-5 mb-3">Projectbeheer</h1>
                    <tr>
                        <th>Naam</th>
                        <th>Aangemaakt op</th>
                        <th>Laatst geopend</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->titel }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->updated_at }}</td>
                            <td>{{ $project->status }}</td>
                          
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
