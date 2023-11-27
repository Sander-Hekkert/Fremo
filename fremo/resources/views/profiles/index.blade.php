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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                        Wachtwoord wijzigen
                    </button>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editDetailsModal">
                        Gegevens wijzigen
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
                <!-- Add your change password form here -->
            </div>
        </div>
    </div>

    <!-- Edit Details Modal -->
    <div class="modal fade" id="editDetailsModal" tabindex="-1" aria-labelledby="editDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDetailsModalLabel">Gegevens wijzigen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Add your edit details form here -->
            </div>
        </div>
    </div>
@endsection
