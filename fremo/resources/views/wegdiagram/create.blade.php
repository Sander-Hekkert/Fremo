<!-- resources/views/livewire/module-list.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <h1>Tijd / wegdiagram</h1>

            <form wire:submit.prevent="store" id="wegdiagramForm">
                @csrf
                <input type="hidden" name="project_id" value="{{ $project_id }}">

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            @livewire('module-list', ['project_id' => $project_id, 'selectedModules' => $selectedModules])
                        </div>
                    </div>
                </div>
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
@endsection
