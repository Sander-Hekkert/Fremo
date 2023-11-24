<?php
namespace App\Http\Controllers;
use App\Models\Wegdiagram;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Project;

class WegdiagramController extends Controller
{
    public function create($project_id)
    {
        // Pass the $project_id to the view, if needed
        return view('wegdiagram.create', compact('project_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'starttijd' => 'required',
            'eindtijd' => 'required',
        ]);

        $wegdiagram = new Wegdiagram();
        $wegdiagram->projects_id = auth()->id();
        $wegdiagram->starttijd = $request->input('starttijd');
        $wegdiagram->eindtijd = $request->input('eindtijd');
        $wegdiagram->status = '50%';
        $wegdiagram->save();

        return redirect()->route('tijddiagram.index', ['project_id' => $request->input('project_id')])->with('success', 'Wegdiagram successfully created!');
    }
    public function downloadPDF()
    {
        // Haal de gegevens op die je in de PDF wilt opnemen (bijvoorbeeld projectgegevens, wegdiagramgegevens, enz.)
        $project = Project::find($project_id); // Veronderstel dat je een Project-model hebt

        $wegdiagrams = Wegdiagram::where('projects_id', $project_id)->get(); // Veronderstel dat je een Wegdiagram-model hebt

        $data = [
            'project' => $project,
            'wegdiagrams' => $wegdiagrams,
        ];

        // Laad de PDF-weergave en geef de gegevens door
        $pdf = PDF::loadView('wegdiagram.pdf', $data);

        // Download de PDF
        return $pdf->download('wegdiagram_overview.pdf');
    }
}