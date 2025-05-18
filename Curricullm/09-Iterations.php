<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Iterations </title>


</head>
<body>
    
<?php

/* ---------- loop = Iterations ----------- For while Do While */

// $i=0;
for($i=0;$i<=10;$i++)
{
   echo "Welcome To Loop : ".$i;
   echo "</br>";
}

//---------------
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

$cname="Abdo";
$length=7;
for($i=0;$i<=$length;$i++)
{
   echo "Welcome  Mr  : ".$cname;
   echo "</br>";
}

//---------------
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

for($i=0;$i<=100;$i+=10)
{
   echo "Welcome To Loop : ".$i;
   echo "</br>";
}

//---------------
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

for($i=100;$i>=0;$i-=10)
{
   echo "Welcome To Loop : ".$i;
   echo "</br>";
}

//---------------
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

$employeeNum=5;
$salary=7000;
$totalsalary=0;
$avgSalary=0;

for($i=0;$i<$employeeNum;$i++)
{

   $totalsalary+=$salary;

}

echo("Total Salary is : ".$totalsalary);

echo("<br>");


echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");
$avgSalary=$totalsalary/$employeeNum;

echo("<br>");

echo("Average Salary is : ".$avgSalary);

echo("<br>");

if($avgSalary>=50000)
{
          $totalsalary-=($totalsalary*12.5)/100;

          echo("Total Salary After Deduction is : ".$totalsalary);
}
else
{
          $totalsalary+=($totalsalary*15.5)/100;

          echo("Total Salary After Bouns is : ".$totalsalary);        
}

echo("<br>");


echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

for($i=0; $i<=10;$i++)
{
          if($i==5)
          {
                    break;
          }
          echo(" For by Break ...............");
          echo("<br>");
}

echo("<br>");


echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

for($i=0; $i<=10;$i++)
{
          if($i==5)
          {
                    continue;
          }
          echo(" For by Break ...............".$i);
          echo("<br>");
}

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");


$root=0;

while($root<=10)
{
          echo("Welcome To While ".$root);
          echo("<br>");

       $root++;   
}


echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

$clientName="Ahmed";
$printNum=5;
$root2=0;
while($root2<=$printNum)
{
          echo("Welcome Mr :  ".$clientName);
          echo("<br>");

       $root2++;   
}

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");


$root3=0;
while($root3<=100)
{
          echo("While By Compound : ".$root3);
          echo("<br>");

       $root3+=10;   
}

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

$root4=100;
while($root4>=0)
{
          echo("While By Compound : ".$root4);
          echo("<br>");

       $root4-=10;  
}


echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

$root5=0;


do
{
          echo("Welcome To Do While ");
          echo("<br>");
          $root5++;

}
while($root5<=10);

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");


$clientName2="Abdo";
$printNum2=6;
$root6=0;

do
{
          echo("Welcome Mr :  ".$clientName2);
          echo("<br>");
          $root6++;

}
while($root6<=$printNum2);

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");



$root7=0;

do
{
          echo(" Do While By Comnpund  :  ".$root7);
          echo("<br>");
        
          $root7+=10;

}
while($root7<=100);

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");



$root8=100;

do
{
          echo(" Do While By Comnpund  :  ".$root8);
          echo("<br>");
        
          $root8-=10;

}
while($root8>=0);



echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");


$employeeNumwhile=5;
$salaryWhile=5000;
$totalsalaryWhile=0;
$avgWhile=0;
$rootWhile=0;

while($rootWhile<$employeeNumwhile)
{
          $totalsalaryWhile+=$salaryWhile;
          $rootWhile++;
}

echo("Total Salary is :".$totalsalaryWhile);
echo("<Br>");

$avgWhile=$totalsalaryWhile/$employeeNumwhile;

echo("Average  Salary is :".$avgWhile);
echo("<Br>");


if($avgWhile>=50000)
{
          $totalsalaryWhile-=($totalsalaryWhile*12.5)/100;
          echo("Total Salary After Deduction is :".$totalsalaryWhile);
}
else
{
          $totalsalaryWhile+=($totalsalaryWhile*15.5)/100;
          echo("Total Salary After Bouns is :".$totalsalaryWhile);        
}


echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

//---------------------- Nested Loop  ----------------

for($i=0;$i<=10;$i++)
{
          echo("=========== The Big ===========================");

          for($x=0;$x<=5;$x++)
          {
                    echo("=========== The Med ===========================");

                    for($z=0;$z<=3;$z++)
                    {
                              echo("============ The Small ==========================");
                    }
     
          }
}

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

$rootnestedWhile=0;
$rootmed=0;
$rootSmall=0;
while($rootnestedWhile<10)
{


          while($rootmed<=5)
          {

                    while($rootSmall<=6)
                    {
                              echo("======== The Small ===================");
                              $rootSmall++;
                    }
                    echo("======== The Med ===================");
                    $rootmed++;
          }
          echo("======== The Big ===================");
          $rootnestedWhile++;
}

echo("<br>");
echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");


$rootbigDo=0;
$rootmedDo=0;
$rootSmallDo=0;

do
{

          do
          {

                    do
                    {
                              $rootSmallDo++;
                              echo("======== The Small ===================");

                    }while($rootSmallDo<=10);

                    echo("======== The Med ===================");
                    $rootmedDo++;
          } while($rootmedDo<=5);
          echo("======== The Big ===================");
          $rootbigDo++;
}while($rootbigDo<=10);
?>
</body>
</html>