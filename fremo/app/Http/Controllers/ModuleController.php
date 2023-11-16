<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('module.index', compact('modules'));
    }

    public function edit($id)
    {
        $module = Module::find($id);
        return view('module.edit', compact('module'));
    }

    public function update(Request $request, $id)
    {
        // Voeg hier de logica toe om de module bij te werken
    }

    public function delete($id)
    {
        $module = Module::find($id);
        return view('module.delete', compact('module'));
    }

    public function new()
    {
        return view('module.new');
    }

    public function create(Request $request)
    {
        // Voeg hier de logica toe om een nieuwe module aan te maken
    }
}
