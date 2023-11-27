<!-- resources/views/wegdiagram/create.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <h1>Tijd / wegdiagram</h1>

                <form action="{{ route('wegdiagram.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="project_id" value="{{ $project_id }}">

                    <div class="mb-3">
                        <label for="datum" class="form-label">Datum Tijd / weg diagram:</label>
                        <input type="date" name="datum" class="form-control border border-primary" required>
                    </div>

                    <div class="mb-3">
                        <label for="station" class="form-label">Selecteer een station:</label>
                        <select name="station" class="form-select border border-primary">
                            @foreach($stations as $station)
                                <option value="{{ $station->id }}">{{ $station->naam }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="trein" class="form-label">Selecteer een trein:</label>
                        <select name="trein" class="form-select border border-primary">
                            @foreach($treinen as $trein)
                                <option value="{{ $trein->id }}">{{ $trein->naam }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="trein" class="form-label">Hernoem de trein:</label>
                        <input type="trein" name="datum" class="form-control border border-primary" required>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="starttijd" class="form-label">Starttijd:</label>
                                <input type="datetime-local" name="starttijd" class="form-control border border-primary" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="eindtijd" class="form-label">Eindtijd:</label>
                                <input type="datetime-local" name="eindtijd" class="form-control border border-primary" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning mt-3 text-white rounded-5">Sla op</button>
                </form>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Treinen</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Stations</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
