<?php

namespace App\Http\Controllers;

use App\Models\Wegdiagram;
use App\Models\Stationweg; // Import the Stationweg model
use Illuminate\Http\Request;
//use Barryvdh\DomPDF\PDF; <-probeer deze ipv facade als die niet werkt
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Projects;
use App\Models\Trein;
use App\Models\Module;

class WegdiagramController extends Controller
{
    public function create($project_id)
    {
        $treinen = Trein::all();
        $modules = Module::all();

        // Ophalen van geselecteerde modules_id
        $selectedModules = Wegdiagram::where('projects_id', $project_id)->pluck('modules_id')->toArray();

        return view('wegdiagram.create', compact('project_id', 'treinen', 'modules', 'selectedModules'));
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

    public function downloadPDF($project_id)
    {
        // Haal de gegevens op die je in de PDF wilt opnemen (bijvoorbeeld projectgegevens, wegdiagramgegevens, treinen, stations, enz.)
        $project = Projects::find($project_id);
        $wegdiagrams = Wegdiagram::where('projects_id', $project_id)->get();
        $treinen = Trein::all();
        $stations = Module::all();

        $data = [
            'project' => $project,
            'wegdiagrams' => $wegdiagrams,
            'treinen' => $treinen,
            'stations' => $stations,
        ];

        // Laad de PDF-weergave en geef de gegevens door
        $pdf = PDF::loadView('wegdiagram.pdf', $data);

        // Download de PDF
        return $pdf->download('wegdiagram_overview.pdf');
    }

    public function storeModule(Request $request)
    {
        $request->validate([
            'project_id' => 'required',
            'module_id' => 'required',
        ]);

        $stationweg = new Stationweg();
        $stationweg->project_id = $request->project_id;
        $stationweg->module_id = $request->module_id;
        $stationweg->save();

        // Add a debugging statement
        \Log::info('Stationweg added: ' . $stationweg->id . ', ' . $stationweg->module_id);

        return response()->json(['module_name' => $stationweg->module->naam]);
    }
}
