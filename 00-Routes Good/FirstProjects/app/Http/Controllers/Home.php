<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //------ Create Function ---------
    public function Index()
    {
        echo "Welcome To First Controller By Route";
    }

    public function Create()
    {
        echo "Create Function By Controller ";
    }

    public function Store()
    {
        echo "Store Function By Controller ";
    }

    public function Edit()
    {
        echo "Edit Function By Controller ";
    }

    public function Update()
    {
        echo "Update Function By Controller ";
    }

    public function Delete()
    {
        echo "Delete Function By Controller ";
    }

    public function Destroy()
    {
        echo "Destroy Function By Controller ";
    }
}
