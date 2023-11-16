<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpoorbeheerController extends Controller
{
    public function showSpoorbeheer()
    {
        return view('spoorbeheer');
    }
}
