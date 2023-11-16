<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wagenkaart extends Controller
{
    public function showWagenkaart()
    {
        return view('wagenkaart');
    }
}
