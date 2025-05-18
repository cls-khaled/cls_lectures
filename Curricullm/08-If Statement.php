<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> If Statement </title>
</head>
<body>

<?php

/*------- Comparison Operators ----------------
==   If Equal
!-   if Not Equal
>     greater than
<     less than
>=    greater than or equal
<=    less than or equal

*/

/*---------- Logical Operators -----------
 
 ***************** And    &&  **********************************
true  && true =true
true && false = false
false &&  true = false
false && false = false

 ***************** Or    ||  **********************************
 true || true = true
 true || false = true
 false || true = true
 false || false = false
*/

$username="Abdo";
$pass="123456";

if($username=="Abdo" && $pass=="123456")
{
          echo "welcome Mr : ".$username;
}
else
{
          echo "Invalid User name or password";
}

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

?>

<?php
$degree=99;

if($degree>=50 && $degree<=60 )
{
          echo "<h1 style='color:green;font-size:3em'> Pass  </h1>";
}
else if($degree>60 && $degree<=80 )
{
          echo "<h1 style='color:green;font-size:3em'> Good  </h1>";
}

else if($degree>80 && $degree<=90 )
{
          echo "<h1 style='color:green;font-size:3em'>very Good  </h1>";
}

else if($degree>90 && $degree<=100 )
{
          echo "<h1 style='color:green;font-size:3em'> Excellent </h1>";
}

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");
?>

<?php

$nationality="USA";
$qulification="Art";
$Gender=true;
$experinceYears=5;
$expectedSalary=5000;

if($nationality=="EG" || $nationality=="ye" || $nationality=="Sa")
{
     
          if($qulification=="Art" ||$qulification=="Fin" ||$qulification=="CS")
          {
                 
                    if($Gender==true)
                    {
                           if($experinceYears>3 && $experinceYears<=7)
                           {
                                if($expectedSalary>=5000 && $expectedSalary<=15000)
                                {
                                        echo "<h1> Congratulationssssssssssssss </h1>";
                                }
                                else
                                {
                                        echo "<h1> invalid Expected Salary  </h1>";
                                }
                           }
                           else
                           {
                              echo "<h1> invalid Experince Years  </h1>";
                           }
                    }
                    else
                    {
                              echo "<h1> invalid Gender  </h1>";
                    }
          }
          else
          {
                    echo "<h1> invalid Qulifications  </h1>"; 
          }
}
else
{
          echo "<h1> invalid Natioality </h1>";
}

?>
          
</body>
</html>