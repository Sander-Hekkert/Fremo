<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trein;

class TreinController extends Controller
{
    public function index()
    {
        $treins = Trein::all();
        return view('trein.index', compact('treins'));
    }

    public function edit($id)
    {
        $trein = Trein::find($id);
        return view('trein.edit', compact('trein'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
    
        $trein = Trein::findOrFail($id);
        $trein->update($request->all());
    
        return redirect()->route('treins.index')->with('success', 'Trein updated successfully');
    }

    public function destroy($id)
    {
        $trein = Trein::findOrFail($id);
        $trein->delete();
    
        return redirect()->route('treinen.index')->with('success', 'Trein deleted successfully');
    }

    public function new()
    {
        return view('trein.new');
    }

    public function store(Request $request)
    {
        Trein::create($request->all());
        return redirect()->route('trein.index')->with('success', 'Trein created successfully');
    }

    public function create(Request $request)
    {
        return view('trein.create');    
    }
}
