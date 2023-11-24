@extends('layouts.app')

@section('content')
    <h1>Bewerk Profiel</h1>
    <form action="{{ route('updateUser', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Volledige Naam</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">E-mailadres</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Bijwerken</button>
    </form>
@endsection
