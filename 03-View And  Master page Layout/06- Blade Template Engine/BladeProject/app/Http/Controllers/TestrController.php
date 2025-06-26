<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestrController extends Controller
{
    public function GetBladeTestFunction()
    {
         $data=["name"=>"Omar","Gender"=>"Male","age"=>"11"];
        return view("FisrtBlade",compact("data"));
    }
}
