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
            </tr>
            </thead>
            <tbody>
            @foreach ($wagenkaart as $wagenkaart)
                <tr>
                    <td>{{ $wagenkaart->naam_bezitter }}</td>
                    <td>{{ $wagenkaart->naam }}</td>
                    <td>{{ $wagenkaart->nummer_module }}</td>
                    <td>{{ $wagenkaart->e_f }}</td>
                    <td>{{ $wagenkaart->opmerkingen_bijzonderheden }}</td>
                    <td>{{ $wagenkaart->aantal_sporen_begin }}</td>
                    <td>{{ $wagenkaart->aantal_sporen_eind }}</td>

                    <td>
                        <form action="{{ route('module.destroy', $module->id) }}" method="POST" style="display: inline-block;">
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
