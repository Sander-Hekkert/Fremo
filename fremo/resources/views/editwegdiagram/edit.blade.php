@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <h1>Tijd / wegdiagram</h1>

            <form id="wegdiagramForm" action="{{ route('wegdiagram.store') }}" method="post">
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
                            <select id="module_id" name="module_id" class="form-select form-select-sm border border-primary">
                                @foreach($modules as $module)
                                <option value="{{ $module->id }}">{{ $module->naam }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="button" id="addModule" class="btn btn-success mt-2 text-white rounded-5">Voeg Module Toe</button>
            </form>
        </div>
        <div class="col-8">
            <div class="row justify-content-end">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modules</h5>
                            <ul id="modulesList">
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

<button type="submit" id="saveButton" class="btn btn-warning mt-3 text-white rounded-5">Sla op</button>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#addModule').on('click', function () {
            let module_id = $('#module_id').val();

            // Voeg module toe aan de lijst via AJAX
            $.ajax({
                url: '{{ route('wegdiagram.storeModule') }}',
                type: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    project_id: '{{ $project_id }}',
                    module_id: module_id,
                },
                success: function (response) {
                    // Voeg de module toe aan de lijst
                    $('#modulesList').append('<li>' + response.module_name + '</li>');
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        $('#saveButton').on('click', function () {
            // Submit the wegdiagramForm when the "Sla op" button is clicked
            $('#wegdiagramForm').submit();
        });
    });
</script>
@endsection
