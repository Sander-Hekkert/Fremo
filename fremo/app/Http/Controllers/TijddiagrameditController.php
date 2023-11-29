<?php

namespace App\Http\Controllers;
use App\Models\Tijddiagram;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

class TijddiagrameditController extends Controller
{
    public function title($id)
    {
        // Fetch the project with the given ID from the database
        $tijddiagram = Projects::find($id);

        // Check if the project exists
        if (!$tijddiagram) {
            abort(404); // Or handle it in a way that suits your application
        }

        // Pass the project data to the view
        return view('edittijddiagram.edit', compact('tijddiagram'));
    }
    public function update($id, Request $request)
    {
        // Validate the request data
        $request->validate([
            'titel' => 'required|string|max:255',
        ]);

        // Fetch the project with the given ID from the database
        $tijddiagram = Projects::find($id);

        // Check if the project exists
        if (!$tijddiagram) {
            abort(404); // Or handle it in a way that suits your application
        }

        // Update the title with the new value from the request
        $tijddiagram->titel = $request->input('titel');
        $tijddiagram->save();

        return redirect()->route('dienstregeling.edit', ['id' => $id])
            ->with('success', 'Project Tijddiagram updated successfully');

    }
}
