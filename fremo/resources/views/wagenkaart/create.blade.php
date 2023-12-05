@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="my-4">Create Wagenkaart Entry</h1>

        <div class="row">
        <div class="col-6">
            <form action="{{ route('wagenkaart.store') }}" method="POST">
                @csrf
            <div class="mb-3">
                <label for="Eigenaarsnaam" class="form-label">Eigenaarsnaam</label>
                <input type="text" class="form-control" id="Eigenaarsnaam" name="Eigenaarsnaam" required>
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
                <label for="Beschrijving" class="form-label">Beschrijving:</label>
                <textarea class="form-control" id="Beschrijving" name="Beschrijving" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="Lengte" class="form-label">Lengte:</label>
                <input type="text" class="form-control" id="Lengte" name="Lengte">
            </div>

            <div class="mb-3">
                <label for="Asafstand" class="form-label">Asafstand:</label>
                <input type="text" class="form-control" id="Asafstand" name="Asafstand">
            </div>
            <div class="mb-3">
                <label for="Nuttige_Lading" class="form-label">Nuttige Lading:</label>
                <input type="text" class="form-control" id="Nuttige_Lading" name="Nuttige_Lading">
            </div>

            <div class="mb-3">
                <label for="Ladelengte" class="form-label">Ladelengte:</label>
                <input type="text" class="form-control" id="Ladelengte" name="Ladelengte">
            </div>
        </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="Ladeflak" class="form-label">Ladeflak:</label>
                    <input type="text" class="form-control" id="Ladeflak" name="Ladeflak">
                </div>

                <div class="mb-3">
                    <label for="Lade_instructies" class="form-label">Lade_instructies:</label>
                    <textarea class="form-control" id="Lade_instructies" name="Lade_instructies" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="Modelaanduiding" class="form-label">Modelaanduiding:</label>
                    <input type="text" class="form-control" id="Modelaanduiding" name="Modelaanduiding">
                </div>

                <div class="mb-3">
                    <label for="Modelkenmerken" class="form-label">Modelkenmerken:</label>
                    <input type="text" class="form-control" id="Modelkenmerken" name="Modelkenmerken">
                </div>

                <div class="mb-3">
                    <label for="Eigenaar" class="form-label">Eigenaar:</label>
                    <input type="text" class="form-control" id="Eigenaar" name="Eigenaar">
                </div>

                <div class="mb-3">
                    <label for="Fabrikant" class="form-label">Fabrikant:</label>
                    <input type="text" class="form-control" id="Fabrikant" name="Fabrikant">
                </div>

                <div class="mb-3">
                    <label for="Wielstellen" class="form-label">Wielstellen:</label>
                    <input type="text" class="form-control" id="Wielstellen" name="Wielstellen">
                </div>

                <div class="mb-3">
                    <label for="Koppelingen" class="form-label">Koppelingen:</label>
                    <input type="text" class="form-control" id="Koppelingen" name="Koppelingen">
                </div>

                <div class="mb-3">
                    <label for="Veerpuffer" class="form-label">Veerpuffer:</label>
                    <input type="text" class="form-control" id="Veerpuffer" name="Veerpuffer">
                </div>

                <div class="mb-3">
                    <label for="Model_lengte" class="form-label">Model_lengte:</label>
                    <input type="text" class="form-control" id="Model_lengte" name="Model_lengte">
                </div>

                <div class="mb-3">
                    <label for="Modelgewicht" class="form-label">Modelgewicht:</label>
                    <input type="text" class="form-control" id="Modelgewicht" name="Modelgewicht">
                </div>

                <div class="mb-3">
                    <label for="Bouwjaar" class="form-label">Bouwjaar:</label>
                    <input type="text" class="form-control" id="Bouwjaar" name="Bouwjaar">
                </div>

                    <button type="submit" class="btn btn-primary">Create Entry</button>
                </form>
            </div>

        </div>
    </div>
@endsection
