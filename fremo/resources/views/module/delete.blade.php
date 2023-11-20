@extends('layouts.app')

@section('content')
    <h1>Delete Module</h1>

    <p>Are you sure you want to delete this module?</p>

    <form action="{{ route('module.destroy', $module->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Yes, Delete</button>
    </form>

    <a href="{{ route('module.index') }}">
        <button>Cancel</button>
    </a>
@endsection
