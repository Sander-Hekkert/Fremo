@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row g-1">
            <div class="col-3 border">
                <div class="row">
                    <div class="col-9 border">
                        <p>Nummer module</p>
                       <h1> {{ $wagenkaart->naam }}</h1>
                    </div>
                    <div class="col-3 border">
logo
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
