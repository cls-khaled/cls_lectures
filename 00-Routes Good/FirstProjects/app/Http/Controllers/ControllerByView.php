<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerByView extends Controller
{
    //------- Functions -
    public function CallView()
    {
        return view("Home");
    }

    //------ Call View By Fodler name  --------------
    public function CallViewInternalFolder()
    {
        return view("Sales.SalesTarget");
    }

    //------ Call View By Fodler name  --------------
    public function CallViewAndSendParameters()
    {
        $name="Omar";
        return view("ReciveParameterFromController",compact("name"));
    }

    public function CallViewAndSendMultiParameters()
    {
        $fname="Omar";
        $lname="ALI";
        $surName="Mahmoud";
        $Salary=5000;
        //--- Compact Function Created Array 
        return view("ReciveParameterFromController",compact("fname","lname","surName","Salary"));
    }

     public function CallViewAndSendMultiParametersWithArray()
    {
        $fname="Omar";
        $lname="ALI";
        $surName="Mahmoud";
        $Salary=5000;
      
        return view("ReciveMultiParametersByArray",['fn'=>$fname,'ln'=>$lname,'sn'=>$surName,'s'=>$Salary]);
    }

     public function SendParameterToView()
    {
        $Degree=100;
     
       
        return view("ReciveParameterFromControllerByBlade",['Deg'=>$Degree]);
    }


    //------- ISet By blade Return True Or False 
      public function IsSetByBladeView()
    {
        $age=30;
     
       
        return view("IsSetTrueorFalseByBlade",['G'=>$age]);
    }

    //------- Empty Send Parametere  
      public function EmptySendParameter()
    {
        $age="";
     
       
        return view("Empty",['G'=>$age]);
    }

    //==============================  Foreach By Array 
      public function ForeachByArray()
    {
        $Names=[
['name'=>'Omar'],
['name'=>'ALi'],
['name'=>'Mahmoud']
        ];
     
       
        return view("ForeachByArrayDisplay",['N'=>$Names]);
    }
}
