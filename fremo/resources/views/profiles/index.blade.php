@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mijn profiel</div>
                    <div class="card-body">
                        <p><strong>Naam:</strong> {{ $loggedInUser->name }}</p>
                        <p><strong>Email:</strong> {{ $loggedInUser->email }}</p> 
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Profiel bewerken</a>
                        <form action="{{ route('profile.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Profiel verwijderen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
