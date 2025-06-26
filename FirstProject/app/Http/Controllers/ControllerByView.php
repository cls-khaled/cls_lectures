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

        //------ Call View By Folder name  --------------
        public function CallViewInternalFolder()
        {
            return view("Sales.SalesTarget");
        }


        //------ Send Parameter By  Function   --------------
    public function CallViewAndSendParameters()
    {
        $name="Abdoooooooooooo";
        return view("ReciveParameterFromController",compact("name"));
    }

    //------ Send Multi  Parameter By  Function   --------------
    public function CallViewAndSendMultiParameters()
    {
        $fname="Omar";
        $lname="ALI";
        $surName="Mahmoud";
        $Salary=5000;
        //--- Compact Function Created Array 
        return view("ReciveMultiParameterFromController",compact("fname","lname","surName","Salary"));
    }

     //------ Send Multi  Parameter By  Array    --------------
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
        $Degree=77;
     
       
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

 
    //===========   Foreach By Array ===================   
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
