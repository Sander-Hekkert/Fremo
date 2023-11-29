@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="my-4">Wagenkaart</h1>

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Wagennummer</th>
                    <th>II</th>
                    <th>III</th>
                    <th>IV</th>
                    <th>UIC-Typ</th>
                    <th>Beschreibung</th>
                    <th>lüp</th>
                    <th>achsstand</th>
                    <th>nutzlast</th>
                    <th>ladelänge</th>
                    <th>ladefläche</th>
                    <th>ladehinweise</th>
                    <th>modelbeschriftung</th>
                    <th>modellmerkmale</th>
                    <th>eigentümer</th>
                    <th>hersteller</th>
                    <th>radsätze</th>
                    <th>kupplungen</th>
                    <th>federpuffer</th>
                    <th>modell_lüp</th>
                    <th>modellgewicht</th>
                    <th>baujahr</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wagenkaart as $wagen)
                    <tr>
                        <td>{{ $wagen->naam_bezitter }}</td>
                        <td>{{ $wagen->naam }}</td>
                        <td>{{ $wagen->nummer_module }}</td>
                        <td>{{ $wagen->e_f }}</td>
                        <td>{{ $wagen->opmerkingen_bijzonderheden }}</td>
                        <td>{{ $wagen->uic_typ }}</td>
                        <td>{{ $wagen->beschreibung }}</td>
                        <td>{{ $wagen->luep }}</td>
                        <td>{{ $wagen->achsstand }}</td>
                        <td>{{ $wagen->nutzlast }}</td>
                        <td>{{ $wagen->ladelänge }}</td>
                        <td>{{ $wagen->ladeflaeche }}</td>
                        <td>{{ $wagen->ladehinweise }}</td>
                        <td>{{ $wagen->modelbeschriftung }}</td>
                        <td>{{ $wagen->modellmerkmale }}</td>
                        <td>{{ $wagen->eigentuemer }}</td>
                        <td>{{ $wagen->hersteller }}</td>
                        <td>{{ $wagen->radsaetze }}</td>
                        <td>{{ $wagen->kupplungen }}</td>
                        <td>{{ $wagen->federpuffer }}</td>
                        <td>{{ $wagen->modell_luep }}</td>
                        <td>{{ $wagen->modellgewicht }}</td>
                        <td>{{ $wagen->baujahr }}</td>
                        <td>{{ $wagen->foto }}</td>

                        <td>
                            <form action="{{ route('module.destroy', $wagen->id) }}" method="POST" style="display: inline-block;">
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
