<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;


class DienstregelingController extends Controller
{
    public function showDienstregeling()
    {
        $projects = projects::all();
        return view('project.index', compact('projects'));

    }
    public function index()
    {
        $projects = projects::all();
        return view('dienstregeling.index', ['projects' => $projects]);
    }
    public function yourMethod()
    {
        $project = Project::with('wegdiagram')->get();
        return view('your-view', compact('projects'));
    }
    public function edit($id)
    {
        $project = Projects::findOrFail($id); // Gebruik de juiste naam van het model
        // Voeg hier eventuele logica toe die je nodig hebt voor de bewerkpagina
        return view('dienstregeling.edit', compact('project'));
    }
    public function delete($id)
    {
        // Find the Dienstregeling item by ID
        $dienstregeling = Projects::find($id);

        if (!$dienstregeling) {
            // Handle the case where the item is not found
            abort(404, 'Dienstregeling item not found');
        }

        // Perform any additional logic (e.g., soft delete, confirmation)

        // Delete the item (You may want to use soft delete instead)
        $dienstregeling->delete();

        // Redirect or return a response
        return redirect()->route('dienstregeling')->with('success', 'Dienstregeling item deleted successfully');
    }
}
