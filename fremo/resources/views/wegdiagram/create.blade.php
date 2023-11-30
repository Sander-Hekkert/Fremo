@extends('layouts.app')

@section('content')
<!-- resources/views/livewire/module-list.blade.php -->
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <h1>Tijd / wegdiagram</h1>

            <form wire:submit.prevent="store" id="wegdiagramForm">
                @csrf
                <input type="hidden" name="project_id" value="{{ $project_id }}">

                <div class="mb-3">
                    <label for="datum" class="form-label">Datum:</label>
                    <input type="date" name="datum" class="form-control border border-primary" required>
                </div>

                <div class="row">
                        <div class="col-12">   
                            <div class="mb-3">
                                <label for="module" class="form-label">Selecteer een station:</label>
                                @livewire('module-list', ['project_id' => $project_id, 'selectedModules' => $selectedModules])
                            </div>
                        </div>
                    </div>

                    <button type="button" wire:click="addModule" class="btn btn-success mt-2 text-white rounded-5">Voeg Module Toe</button>
            </form>
        </div>
        <div class="col-8">
            <div class="row justify-content-end">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modules</h5>
                            <ul>
                                @foreach($selectedModules as $selectedModuleId)
                                <li>{{ $modules->find($selectedModuleId)->naam }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <button type="submit" id="saveButton" wire:click="save" class="btn btn-warning mt-3 text-white rounded-5">Sla op</button>
@endsection
