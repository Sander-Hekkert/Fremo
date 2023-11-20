@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="">{{ __('Over ons') }}</div>
                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <img src="{{ asset('Fotos/image2.png') }}" alt="home" class="img-fluid mx-auto d-block mb-0">
                    <p>Wij, die begin jaren '80 FREMO hebben opgericht, vonden, dat de mogelijkheden om zich met de modelbouwhobby bezig te houden nog lang niet waren uitgeput. Wie zich als individu met deze interressante hobby bezig houdt, stoot, bij een gemiddelde hoeveelheid aan beschikbare tijd, geld en plaats binnen zijn eigen muren al snel aan de grenzen van zijn mogelijkheden. Als lid van een modelbaanvereniging, moet men zich vaak tevreden stellen met een al vastgelegde thematiek die normaal gesproken gebaseerd is op een jarenlang bevochten compromis.</p>
                </div>

                <div class="">
                <div class="">{{ __('Over FREMO') }}</div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Wilt u meer weten over wie wij zijn, wat wij doen en waarom dat zo is? Kijk dan dit Filmpje.</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uDsWfdaHBvg" frameborder="0" allowfullscreen></iframe>
                </div>
    </div>
</div>
@endsection
