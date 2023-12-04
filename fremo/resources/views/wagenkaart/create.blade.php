@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="my-4">Create Wagenkaart Entry</h1>

        <form action="{{ route('wagenkaart.store') }}" method="POST">
            @csrf

            <!-- Add your form fields here -->
            <div class="mb-3">
                <label for="naam_bezitter" class="form-label">Naam Bezitter:</label>
                <input type="text" class="form-control" id="naam_bezitter" name="naam_bezitter" required>
            </div>

            <div class="mb-3">
                <label for="naam" class="form-label">Naam:</label>
                <input type="text" class="form-control" id="naam" name="naam" required>
            </div>

            <div class="mb-3">
                <label for="nummer_module" class="form-label">Nummer Module:</label>
                <input type="text" class="form-control" id="nummer_module" name="nummer_module" required>
            </div>

            <div class="mb-3">
                <label for="e_f" class="form-label">E/F:</label>
                <input type="text" class="form-control" id="e_f" name="e_f" required>
            </div>

            <div class="mb-3">
                <label for="opmerkingen_bijzonderheden" class="form-label">Opmerkingen/Bijzonderheden:</label>
                <textarea class="form-control" id="opmerkingen_bijzonderheden" name="opmerkingen_bijzonderheden" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="uic_typ" class="form-label">UIC Typ:</label>
                <input type="text" class="form-control" id="uic_typ" name="uic_typ">
            </div>

            <div class="mb-3">
                <label for="beschreibung" class="form-label">Beschreibung:</label>
                <textarea class="form-control" id="beschreibung" name="beschreibung" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="luep" class="form-label">lüp:</label>
                <input type="text" class="form-control" id="luep" name="luep">
            </div>

            <div class="mb-3">
                <label for="achsstand" class="form-label">achsstand:</label>
                <input type="text" class="form-control" id="achsstand" name="achsstand">
            </div>

            <div class="mb-3">
                <label for="nutzlast" class="form-label">Nutzlast:</label>
                <input type="text" class="form-control" id="nutzlast" name="nutzlast">
            </div>

            <div class="mb-3">
                <label for="ladelange" class="form-label">Ladelänge:</label>
                <input type="text" class="form-control" id="ladelange" name="ladelange">
            </div>

            <div class="mb-3">
                <label for="ladeflaeche" class="form-label">Ladefläche:</label>
                <input type="text" class="form-control" id="ladeflaeche" name="ladeflaeche">
            </div>

            <div class="mb-3">
                <label for="ladehinweise" class="form-label">Ladehinweise:</label>
                <textarea class="form-control" id="ladehinweise" name="ladehinweise" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="modelbeschriftung" class="form-label">Modelbeschriftung:</label>
                <input type="text" class="form-control" id="modelbeschriftung" name="modelbeschriftung">
            </div>

            <div class="mb-3">
                <label for="modellmerkmale" class="form-label">Modellmerkmale:</label>
                <input type="text" class="form-control" id="modellmerkmale" name="modellmerkmale">
            </div>

            <div class="mb-3">
                <label for="eigentuemer" class="form-label">Eigentümer:</label>
                <input type="text" class="form-control" id="eigentuemer" name="eigentuemer">
            </div>

            <div class="mb-3">
                <label for="hersteller" class="form-label">Hersteller:</label>
                <input type="text" class="form-control" id="hersteller" name="hersteller">
            </div>

            <div class="mb-3">
                <label for="radsaetze" class="form-label">Radsätze:</label>
                <input type="text" class="form-control" id="radsaetze" name="radsaetze">
            </div>

            <div class="mb-3">
                <label for="kupplungen" class="form-label">Kupplungen:</label>
                <input type="text" class="form-control" id="kupplungen" name="kupplungen">
            </div>

            <div class="mb-3">
                <label for="federpuffer" class="form-label">Federpuffer:</label>
                <input type="text" class="form-control" id="federpuffer" name="federpuffer">
            </div>

            <div class="mb-3">
                <label for="modell_luep" class="form-label">Modell_lüp:</label>
                <input type="text" class="form-control" id="modell_luep" name="modell_luep">
            </div>

            <div class="mb-3">
                <label for="modellgewicht" class="form-label">Modellgewicht:</label>
                <input type="text" class="form-control" id="modellgewicht" name="modellgewicht">
            </div>

            <div class="mb-3">
                <label for="baujahr" class="form-label">Baujahr:</label>
                <input type="text" class="form-control" id="baujahr" name="baujahr">
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

            <!-- Add other input fields for the remaining columns based on your table structure -->

            <button type="submit" class="btn btn-primary">Create Entry</button>
        </form>
    </div>
@endsection
