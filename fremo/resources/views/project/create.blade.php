@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Project</h2>

        <form action="{{ route('project.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>
@endsection
