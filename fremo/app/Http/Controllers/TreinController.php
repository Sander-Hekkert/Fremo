<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinController extends Controller
{
    public function index()
    {
        $treinen = Trein::all();
        return view('trein.index', compact('treinen'));
    }

    public function edit($id)
    {
        $trein = Trein::find($id);
        return view('trein.edit', compact('trein'));
    }

    public function update(Request $request, $id)
    {
        // Voeg hier de logica toe om de trein bij te werken
    }

    public function delete($id)
    {
        $trein = Trein::find($id);
        return view('trein.delete', compact('trein'));
    }

    public function new()
    {
        return view('trein.new');
    }

    public function create(Request $request)
    {
        // Voeg hier de logica toe om een nieuwe trein aan te maken
    }
}
