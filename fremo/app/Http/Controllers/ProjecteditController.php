<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjecteditController extends Controller
{
    public function title($id)
    {
        // Fetch the project with the given ID from the database
        $project = Projects::find($id);

        // Check if the project exists
        if (!$project) {
            abort(404); // Or handle it in a way that suits your application
        }

        // Pass the project data to the view
        return view('editproject.title', compact('project'));
    }
    public function update($id, Request $request)
    {
        // Validate the request data
        $request->validate([
            'titel' => 'required|string|max:255',
        ]);

        // Fetch the project with the given ID from the database
        $project = Projects::find($id);

        // Check if the project exists
        if (!$project) {
            abort(404); // Or handle it in a way that suits your application
        }

        // Update the title with the new value from the request
        $project->titel = $request->input('titel');
        $project->save();

        return redirect()->route('dienstregeling.edit', ['id' => $id])
            ->with('success', 'Project title updated successfully');

    }


}
