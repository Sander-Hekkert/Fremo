<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        // Valideer het formulier
        $request->validate([
            'titel' => 'required|string|max:255',
        ]);

        // Voeg gegevens toe aan de database
        $project = new Project();
        $project->titel = $request->input('titel');
        $project->users_id = auth()->id(); // Gebruikers-ID van ingelogde gebruiker
        $project->datum_en_tijd_aangemaakt = now();
        $project->status = '25%';
        $project->save();

        return redirect()->route('project.index')->with('success', 'Project succesvol aangemaakt!');
    }
    public function index()
    {
        // Your logic to fetch and display projects goes here
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }
}
