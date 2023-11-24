@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Profile') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profiles.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}:</label>
                                <input type="text" name="name" id="name" value="{{ $loggedInUser->name }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}:</label>
                                <input type="email" name="email" id="email" value="{{ $loggedInUser->email }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
