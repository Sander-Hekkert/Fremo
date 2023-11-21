@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Modules</h1>

                <a href="{{ route('module.new') }}" class="btn btn-primary">
                    New
                </a>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Naam Bezitter</th>
                        <th>Afkorting</th>
                        <th>Nummer Module</th>
                        <th>Naam Thema/Module</th>
                        <th>Lengte 1</th>
                        <th>Lengte 2</th>
                        <th>Lengte 3</th>
                        <th>E+F</th>
                        <th>Hoek</th>
                        <th>Straal</th>
                        <th>Type Eindprofiel 1</th>
                        <th>Type Eindprofiel 2</th>
                        <th>Bovenbouw Rails</th>
                        <th>Opmerkingen Bijzonderheden</th>
                        <th>Aantal Sporen</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($modules as $module)
                        <tr>
                            <td>{{ $module->naam_bezitter }}</td>
                            <td>{{ $module->afkorting }}</td>
                            <td>{{ $module->nummer_module }}</td>
                            <td>{{ $module->naam_thema_module }}</td>
                            <td>{{ $module->lengte_1 }}</td>
                            <td>{{ $module->lengte_2 }}</td>
                            <td>{{ $module->lengte_3 }}</td>
                            <td>{{ $module->e_f }}</td>
                            <td>{{ $module->hoek }}</td>
                            <td>{{ $module->straal }}</td>
                            <td>{{ $module->type_eindprofiel_1 }}</td>
                            <td>{{ $module->type_eindprofiel_2 }}</td>
                            <td>{{ $module->bovenbouw_rails }}</td>
                            <td>{{ $module->opmerkingen_bijzonderheden }}</td>
                            <td>{{ $module->aantal_sporen }}</td>
                            <td>
                                <a href="{{ route('module.edit', $module->id) }}" class="btn btn-warning">
                                    Edit
                                </a>
                                <a href="{{ route('module.delete', $module->id) }}" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
