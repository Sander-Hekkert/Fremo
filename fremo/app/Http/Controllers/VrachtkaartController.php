<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class VrachtkaartController extends Controller
{
    public function downloadPDF()
    {
        $data = []; // gegevens die je naar de weergave doorgeeft

        $pdf = PDF::loadView('project.index', $data);
        return $pdf->download('project_overview.pdf');
    }
}
