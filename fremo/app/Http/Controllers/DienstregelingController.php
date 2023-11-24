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
}
