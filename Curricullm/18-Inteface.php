<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Interface </title>
</head>
<body>
          
<?php
interface Employee
{
       //--- Can not Conatin Property 
       //------ can not Conatin Function With body 
       //---- Can not Contain Constructor 

       function welcome();

       function welcomeByMessage($msg);

       function salaryEngine($fsalary,$bouns,$ded);

      
       
}


class Sales implements Employee
{
       
  
}

//---------------- Create Objects 

// $S= new Sales();

// $S->welcome();

// echo("<br>");

// $S->welcomeByMessage("Ya Interface ");

// echo("<br>");

// $TheNetSalary= $S->salaryEngine(5000,2000,1000);
// echo("Net Salary ".$TheNetSalary);


?>
</body>
</html>