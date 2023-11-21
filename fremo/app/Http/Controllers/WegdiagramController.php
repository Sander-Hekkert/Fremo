<?php
namespace App\Http\Controllers;

use App\Models\Wegdiagram;
use Illuminate\Http\Request;

class WegdiagramController extends Controller
{
    // ...

    public function create($project_id)
    {
        return view('wegdiagram.create', compact('project_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'starttijd' => 'required|date',
            'eindtijd' => 'required|date|after:starttijd',
            'project_id' => 'required|exists:projects,id',
        ]);

        Wegdiagram::create([
            'project_id' => $request->input('project_id'),
            'starttijd' => $request->input('starttijd'),
            'eindtijd' => $request->input('eindtijd'),
            'status' => '50%',
            // Add other Wegdiagram fields here
        ]);

        return redirect()->route('project.index')->with('success', 'Wegdiagram created successfully.');
    }
}