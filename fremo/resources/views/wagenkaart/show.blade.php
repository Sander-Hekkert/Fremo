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
                    <div class="col-6 border">
                        <p>bestemming</p>
                        <h1>Plaats</h1>
                    </div>
                    <div class="col-6 border">
                       <h2> AW: Plaats</h2>
                    </div>
                    <div class="col-3 border">lup:</div>
                    <div class="col-3 border">{{ $wagenkaart->Lengte }}</div>
                    <div class="col-3 border">Vmax</div>
                    <div class="col-3 border">Km/u</div>
                </div>
            </div>
        </div>
    </div>
@endsection
