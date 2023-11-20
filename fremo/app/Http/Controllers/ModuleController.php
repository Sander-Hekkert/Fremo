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
        // Validate the request...
    
        $module = Module::findOrFail($id);
        $module->update($request->all());
    
        return redirect()->route('module.index')->with('success', 'Module updated successfully');
    }

    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        $module->delete();
    
        return redirect()->route('module.index')->with('success', 'Module deleted successfully');
    }

    public function new()
    {
        return view('module.new');
    }

    public function store(Request $request)
    {
        Module::create($request->all());
        return redirect()->route('module.index')->with('success', 'Module created successfully');
    }

    public function create(Request $request)
    {
        return view('module.create');    
    }
}
