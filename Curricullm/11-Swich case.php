<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Swich case </title>
</head>
<body>
          
<?php

$labName="A";

switch($labName)
{

          case "A":
            echo("Course Name is : Full Stack ");
            echo("Start Date is : 1/1/2025 ");
            echo("End Date  is : 1/5/2025");
           
                    break;

                    case "B":
                              echo("Course Name is : Mobile Flutter  ");
                              echo("Start Date is : 1/1/2025 ");
                              echo("End Date  is : 1/5/2025");
                             
                                      break;

                                      
                    case "C":
                              echo("Course Name is : UX/Ui  ");
                              echo("Start Date is : 1/1/2025 ");
                              echo("End Date  is : 1/5/2025");
                             
                       break;
                       default:
                       echo("Invalid Lab name ");
                       break;
}


?>
</body>
</html>