@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="my-4">Wagenkaart</h1>
        <div class="mb-3">
            <a href="{{ route('wagenkaart.create') }}" class="btn btn-primary">New Wagenkaart</a>
        </div>
        <div class="row mb-3">
            @foreach ($wagenkaart as $wagen)
                <a href="{{ route('wagenkaart.show', $wagen->id) }}" class="col-3 bg-primary mx-1 rounded-2 text-white p-5 fs-1 text-center text-decoration-none" >
                    {{ $wagen->naam }}
                </a>
            @endforeach
        </div>
    </div>
@endsection
