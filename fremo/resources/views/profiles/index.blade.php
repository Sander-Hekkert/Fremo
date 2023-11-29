@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h1 class="text-center">Mijn profiel</h1>
                </div>
                <hr>
                <div class="mb-3">
                    <p><strong>Naam:</strong> {{ $loggedInUser->name }}</p>
                    <p><strong>Email:</strong> {{ $loggedInUser->email }}</p>
                </div>
                <div class="mb-3 text-center">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editDetailsModal">
                        Naam wijzigen
                    </button>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editDetailsModal2">
                        Email wijzigen
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                        Wachtwoord wijzigen
                    </button>
                </div>
                <form action="{{ route('profiles.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger d-block mx-auto">Profiel verwijderen</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Wachtwoord wijzigen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form-group">
                    <label for="password">{{ __('Wachtwoord') }}:</label>
                    <input type="text" name="password" id="password" value="{{ $loggedInUser->password }}" class="form-control">
                </div>            
            </div>
        </div>
    </div>

    <!-- Edit Details Modal2 -->
    <div class="modal fade" id="editDetailsModal" tabindex="-1" aria-labelledby="editDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDetailsModalLabel">Naam wijzigen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form-group">
                    <label for="name">{{ __('Naam') }}:</label>
                    <input type="text" name="name" id="name" value="{{ $loggedInUser->name }}" class="form-control">
                </div>            
            </div>
        </div>
    </div>
        <div class="modal fade" id="editDetailsModal2" tabindex="-1" aria-labelledby="editDetailsModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDetailsModalLabel2">Email wijzigen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form-group">
                    <label for="email">{{ __('Email') }}:</label>
                    <input type="email" name="email" id="email" value="{{ $loggedInUser->email }}" class="form-control">
                </div>            
            </div>
        </div>
    </div>
@endsection
