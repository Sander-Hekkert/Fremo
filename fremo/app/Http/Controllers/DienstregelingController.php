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
}
