<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinController extends Controller
{
    public function showTrein()
    {
        return view('trein');
    }
}
