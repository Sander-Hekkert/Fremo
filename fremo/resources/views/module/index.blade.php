@extends('layouts.app')

@section('content')
    <h1>Module Index</h1>

    <table>
        <thead>
            <tr>
                <!-- Voeg hier de kolomkoppen toe -->
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $module)
                <tr>
                    <!-- Voeg hier de rijgegevens toe -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
