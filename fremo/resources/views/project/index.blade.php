@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titel">Titel:</label>
                <input type="text" name="titel" id="titel" class="form-control">
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