<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerByView extends Controller
{
    //------- Functions -
    public function CallView()
    {
        return view("Cutsomer");
    }
}
