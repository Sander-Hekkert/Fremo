<?php
namespace App\Http\Controllers;

use App\Models\Wegdiagram;
use Illuminate\Http\Request;

class WegdiagramController extends Controller
{
    public function store(Request $request)
    {
        $wegdiagram = new Wegdiagram();
        $wegdiagram->users_id = auth()->id();
        $wegdiagram->starttijd = $request->input('starttijd');
        $wegdiagram->eindtijd = $request->input('eindtijd');
        $wegdiagram->status = '50%';
        $wegdiagram->save();
    
        // Gebruik $wegdiagram in plaats van $project en corrigeer de redirect
        return redirect()->route('tijdtafel.index', ['project_id' => $wegdiagram->id])
                         ->with('success', 'Wegdiagram successfully created!');
    }
    
    public function index()
    {
        // Je logica om Wegdiagrammen op te halen en weer te geven komt hier
        $wegdiagrammen = Wegdiagram::all(); // Haal alle Wegdiagrammen op (pas aan naar je behoefte)
        return view('wegdiagram.index', compact('wegdiagrammen'));
    }
}