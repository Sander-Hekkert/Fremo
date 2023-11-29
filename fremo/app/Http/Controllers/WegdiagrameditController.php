<?php

namespace App\Http\Controllers;

use App\Models\Wegdiagram;
use App\Models\Stationweg;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Project;
use App\Models\Trein;
use App\Models\Module;

class WegdiagrameditController extends Controller
{
    public function title($id)
    {
        // Fetch the project with the given ID from the database
        $wegdiagram = Projects::find($id);

        // Check if the project exists
        if (!$wegdiagram) {
            abort(404); // Or handle it in a way that suits your application
        }

        // Pass the project data to the view
        return view('editwediagram.edit', compact('wegdiagram'));
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
        $wegdiagran->begintijd = $request->input('begintijd');
        $wegdiagran->eindtijd = $request->input('eindtijd');
        $wegdiagran->modules_id = $request->input('modules_id');
        $wegdiagram->save();

        return redirect()->route('dienstregeling.edit', ['id' => $id])
            ->with('success', 'Project Wegdiagram updated successfully');

    }
}
