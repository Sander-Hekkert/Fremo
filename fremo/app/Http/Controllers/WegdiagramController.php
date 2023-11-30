<?php

namespace App\Http\Controllers;

use App\Models\Wegdiagram;
use App\Models\Stationweg;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Module;

class WegdiagramController extends Controller
{
    public function create($project_id)
    {
        $modules = Module::all();

        // Ophalen van geselecteerde modules_id
        $selectedModules = Wegdiagram::where('projects_id', $project_id)->pluck('modules_id')->toArray();

        return view('wegdiagram.create', compact('project_id', 'modules', 'selectedModules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'starttijd' => 'required',
            'eindtijd' => 'required',
        ]);

        $wegdiagram = new Wegdiagram();
        $wegdiagram->project_id = auth()->id();
        $wegdiagram->starttijd = $request->input('starttijd');
        $wegdiagram->eindtijd = $request->input('eindtijd');
        $wegdiagram->status = '50%';
        $wegdiagram->save();

        return redirect()->route('tijddiagram.index', ['project_id' => $request->input('project_id')])->with('success', 'Wegdiagram successfully created!');
    }

    // Add this method as per your requirement
    public function yourControllerMethod($project_id)
    {
        return view('your.blade.view')->with([
            'livewireComponent' => ModuleList::class,
            'livewireData' => [
                'project_id' => $project_id,
                'selectedModules' => $selectedModules, // Pass your selectedModules here
            ],
        ]);
    }
    
}
