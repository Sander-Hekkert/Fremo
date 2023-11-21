<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DienstregelingController extends Controller
{
    public function showDienstregeling()
    {
        return view('project.index');
    }
}
