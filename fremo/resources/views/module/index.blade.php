@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="my-4">Modules</h1>

        <div class="mb-4">
            <a href="{{ route('module.new') }}" class="btn btn-primary">New</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Naam Bezitter</th>
                <th>Nummer Module</th>
                <th>E+F</th>
                <th>Opmerkingen Bijzonderheden</th>
                <th>Aantal Sporen Begin</th>
                <th>Aantal Sporen Eind</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($modules as $module)
                <tr>
                    <td>{{ $module->naam_bezitter }}</td>
                    <td>{{ $module->naam }}</td>
                    <td>{{ $module->nummer_module }}</td>
                    <td>{{ $module->e_f }}</td>
                    <td>{{ $module->opmerkingen_bijzonderheden }}</td>
                    <td>{{ $module->aantal_sporen_begin }}</td>
                    <td>{{ $module->aantal_sporen_eind }}</td>

                    <td>
                        <a href="{{ route('module.edit', $module->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('module.destroy', $module->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
