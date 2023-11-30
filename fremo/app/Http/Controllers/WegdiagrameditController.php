<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Wegdiagram;
use App\Models\Stationweg;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Trein;
use App\Models\Module;

class WegdiagrameditController extends Controller
{
    public function title($id)
    {
        $treinen = Trein::all();
        $modules = Module::all();

        // Fetch the project with the given ID from the database
        $project = Projects::find($id);

        // Check if the project exists
        if (!$project) {
            abort(404);
        }

        $selectedModules = $project->selectedModules;

        // Pass the project data to the view
        return view('editwegdiagram.edit', [
            'project_id' => $id, // Use $id instead of $project_id
            'project' => $project,
            'modules' => $modules,
            'selectedModules' => $selectedModules,
        ]);
    }

    public function update($id, Request $request)
    {

        // Validate the request data
        $request->validate([
            'begintijd' => 'required|string|max:255',
            'eindtijd' => 'required|string|max:255',
            'modules_id' => 'required|string|max:255',
        ]);

        // Fetch the project with the given ID from the database
        $wegdiagram = Projects::find($id);

        // Check if the project exists
        if (!$wegdiagram) {
            abort(404); // Or handle it in a way that suits your application
        }

        // Update the title with the new value from the request
        $wegdiagram->begintijd = $request->input('begintijd');
        $wegdiagram->eindtijd = $request->input('eindtijd');
        $wegdiagram->modules_id = $request->input('modules_id');
        $wegdiagram->save();

        return redirect()->route('dienstregeling.edit', ['id' => $id])
            ->with('success', 'Wegdiagram updated successfully');

    }
}
