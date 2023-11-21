<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('wegdiagram.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="titel">Titel:</label>
                <input type="text" name="titel" id="titel" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
