<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WagenkaartController extends Controller
{
    public function showWagenkaart()
    {
        return view('wagenkaart');
    }
}
