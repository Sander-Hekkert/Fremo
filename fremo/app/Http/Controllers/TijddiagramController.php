<?php

namespace App\Http\Controllers;
use App\Models\Tijddiagram;

use Illuminate\Http\Request;

class TijddiagramController extends Controller
{
   /* public function store(Request $request)
    {
        // Validate and store the project...

        // After successfully storing the project, redirect to wegdiagram.create
        $project = new Projects(); // Assuming you have a new project instance

        // Save the project to get its ID
        $project->titel = $request->input('titel');
        $project->users_id = auth()->id();
        $project->datum_en_tijd_aangemaakt = now();
        $project->status = '25%';
        $project->save();

        // Redirect to wegdiagram.create with the project_id parameter
        return redirect()->route('wegdiagram.create', ['project_id' => $project->id])
            ->with('success', 'Project successfully created!');
    }*/
    public function index()
    {
        // Your logic to fetch and display projects goes here
        $tijddiagram = Tijddiagram::all(); // Fetching all projects
        return view('project.index', compact('projects'));
    }
}
