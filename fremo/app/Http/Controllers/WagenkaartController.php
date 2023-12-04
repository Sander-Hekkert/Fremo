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
            'naam_bezitter' => 'required|string',
            'naam' => 'required|string',
            'other_field' => 'required', // Add validation rules for other fields
            // Add validation rules for other fields based on your table columns
        ]);


        Wagenkaart::create($validatedData);

        return redirect()->route('wagenkaart.index')->with('success', 'Wagenkaart entry created successfully!');
    }

    public function destroy($id)
    {
        $wagenkaart = Wagenkaart::findOrFail($id);
        $wagenkaart->delete();

        return redirect()->route('wagenkaart.index')->with('success', 'Wagenkaart entry deleted successfully!');
    }

    // Add other methods for edit and update as needed
}
