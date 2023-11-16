<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dienstregeling extends Controller
{
    public function showDienstregeling()
    {
        return view('dienstregeling');
    }
}
