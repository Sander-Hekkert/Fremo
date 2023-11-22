<?php
namespace App\Http\Controllers;

use App\Models\Wegdiagram;
use Illuminate\Http\Request;

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
}