<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
        <form action="{{ route('project.update', ['id' => $project->id]) }}" method="POST" class="w-50">
            @csrf
            <div class="form-group text-center">
                <label for="titel" class="mb-3 fw-bold fs-4">Titel voor het project:</label>
                <input type="text" name="titel" id="titel" class="form-control border border-3 border-primary" placeholder="{{ isset($project->titel) ? $project->titel : 'NIET INGEVULD' }}" required>
                <button type="submit" class="btn btn-warning mt-3 text-white rounded-5">Sla op</button>
            </div>
        </form>
    </div>
@endsection
