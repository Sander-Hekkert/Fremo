@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4 offset-1">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <img src="{{ asset('Fotos/image2.png') }}" alt="home" class="img-fluid rounded-4 mt-5">
        </div>
        <div class="offset-2 col-4 d-flex flex-column align-items-center "  style="margin-top: 75px">
            <h1>FREMO</h1>
            <p>Wij, die begin jaren '80 FREMO hebben opgericht, vonden, dat de mogelijkheden om zich met de modelbouwhobby bezig te houden nog lang niet waren uitgeput. Wie zich als individu met deze interessante hobby bezighoudt, stoot, bij een gemiddelde hoeveelheid aan beschikbare tijd, geld en plaats binnen zijn eigen muren al snel aan de grenzen van zijn mogelijkheden. Als lid van een modelbaanvereniging, moet men zich vaak tevreden stellen met een al vastgelegde thematiek die normaal gesproken gebaseerd is op een jarenlang bevochten compromis.</p>
            <img src="{{ asset('Fotos/stars.svg') }}" alt="home" class="img-fluid rounded-4 mt-5">
        </div>

    </div>
@endsection
