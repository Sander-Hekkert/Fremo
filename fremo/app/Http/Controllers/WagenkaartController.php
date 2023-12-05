<?php
// app/Http/Controllers/WagenkaartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wagenkaart;

class WagenkaartController extends Controller
{

    public function index()
    {
        $wagenkaart = Wagenkaart::all();
        return view('wagenkaart.index', compact('wagenkaart'));
    }

    public function create()
    {
        return view('wagenkaart.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Eigenaarsnaam' => 'required|string',
            'naam' => 'required|string',
            'nummer_module' => 'required|string',
            'e_f' => 'required|string',
            'opmerkingen_bijzonderheden' => 'nullable|string',
            'uic_typ' => 'nullable|string',
            'Beschrijving' => 'nullable|string',
            'Lengte' => 'nullable|string',
            'Asafstand' => 'nullable|string',
            'Nuttige_Lading' => 'nullable|string',
            'Ladelengte' => 'nullable|string',
            'Ladeflak' => 'nullable|string',
            'Lade_instructies' => 'nullable|string',
            'Modelaanduiding' => 'nullable|string',
            'Modelkenmerken' => 'nullable|string',
            'Eigenaar' => 'nullable|string',
            'Fabrikant' => 'nullable|string',
            'Wielstellen' => 'nullable|string',
            'Koppelingen' => 'nullable|string',
            'Veerpuffer' => 'nullable|string',
            'Model_lengte' => 'nullable|string',
            'Modelgewicht' => 'nullable|string',
            'Bouwjaar' => 'nullable|string',
            // Add validation rules for other fields based on your table columns
        ]);

        Wagenkaart::create($validatedData);

        return redirect()->route('wagenkaart.index')->with('success', 'Wagenkaart entry created successfully!');
    }
    public function show($id)
    {
        $wagenkaart = Wagenkaart::findOrFail($id);
        return view('wagenkaart.show', compact('wagenkaart'));
    }


    public function destroy($id)
    {
        $wagenkaart = Wagenkaart::findOrFail($id);
        $wagenkaart->delete();

        return redirect()->route('wagenkaart.index')->with('success', 'Wagenkaart entry deleted successfully!');
    }

    // Add other methods for edit and update as needed
}
