<?php

namespace App\Http\Controllers;
use App\Models\Tijddiagram;

use Illuminate\Http\Request;

class TijddiagramController extends Controller
{
    public function index($project_id)
    {
        $tijddiagramController = new Tijddiagram();
        return view('tijddiagram.index', compact('project_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'starttijd' => 'required',
            'eindtijd' => 'required',
        ]);

        $tijddiagram = new Tijddiagram();
        $tijddiagram->projects_id = auth()->id();
        $tijddiagram->status = '75%';
        $tijddiagram->save();

        return redirect()->route('tijddiagram.index', ['project_id' => $request->input('project_id')])->with('success', 'Tijddiagram successfully created!');
    }
}
