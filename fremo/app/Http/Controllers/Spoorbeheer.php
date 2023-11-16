<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Spoorbeheer extends Controller
{
    public function showSpoorbeheer()
    {
        return view('spoorbeheer');
    }
}
