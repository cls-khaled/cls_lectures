<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Functions </title>
</head>
<body>
        
<?php


function Welcome()
{
          echo("Welcome To Functions ");         
}


Welcome();

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

function WelcomebyUserName($fname) {
          
          echo("Welcome Mr : ".$fname);

}


WelcomebyUserName("Ahmed");

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");


function Summions($n1,$n2)
{
          $res=$n1+$n2;
          echo "The result by Functions is : ".$res;
          return $res;

         

}


echo "<br>";

Summions(50,50);

echo "<br>";

echo "The Result is : ".Summions(10,20);
echo "<br>";

$theNet=Summions(100,30);

echo "<br>";

echo "The Result by Varibales is : ".$theNet;

echo "<br>";


if($theNet >=30 && $theNet<=100)
{

          $theNet-=($theNet*33.5)/100;
          echo "The Nest After Deductions is : ".$theNet;
}
else
{
       
          $theNet+=($theNet*33.5)/100;
          echo "The Nest After Bouns is : ".$theNet;   
}

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

function CalcSalary($fixedSalary,$bouns,$deduction)
{

          $theNetSalary=($fixedSalary+$bouns)-$deduction;
          echo "The Net : ".$theNetSalary;

         return $theNetSalary;
}

// CalcSalary(50000,1000,500);

$theNetForAnalysis=CalcSalary(50000,1000,500);

function AnalysisSalaryByTax($NetSalary)
{

          $taxAmount=0;

          if($NetSalary>5000 && $NetSalary<=15000)
          {
                    echo "Tax Percentage is : 5.5 % ";
                    $taxAmount=($NetSalary*5.5)/100;
                    echo "Tax Amount is : ".$taxAmount;
                    echo "<hr>";
                    echo "Net Salary Before Tax is : ".$NetSalary;
                    echo "<hr>";
                    $NetSalary-=$taxAmount;

                    echo "Net Salary After  Tax is : ".$NetSalary;

          }

          else  if($NetSalary>15000 && $NetSalary<=30000)
          {
                    echo "Tax Percentage is : 7.5 % ";
                    $taxAmount=($NetSalary*7.5)/100;
                    echo "Tax Amount is : ".$taxAmount;
                    echo "<hr>";
                    echo "Net Salary Before Tax is : ".$NetSalary;
                    echo "<hr>";
                    $NetSalary-=$taxAmount;

                    echo "Net Salary After  Tax is : ".$NetSalary;

          }

          else  if($NetSalary>30000 && $NetSalary<=50000)
          {
                    echo "Tax Percentage is : 9.5 % ";
                    $taxAmount=($NetSalary*9.5)/100;
                    echo "Tax Amount is : ".$taxAmount;
                    echo "<hr>";
                    echo "Net Salary Before Tax is : ".$NetSalary;
                    echo "<hr>";
                    $NetSalary-=$taxAmount;

                    echo "Net Salary After  Tax is : ".$NetSalary;

          }

          else  if($NetSalary>50000)
          {
                    echo "Tax Percentage is : 11.5 % ";
                    $taxAmount=($NetSalary*11.5)/100;
                    echo "Tax Amount is : ".$taxAmount;
                    echo "<hr>";
                    echo "Net Salary Before Tax is : ".$NetSalary;
                    echo "<hr>";
                    $NetSalary-=$taxAmount;

                    echo "Net Salary After  Tax is : ".$NetSalary;

          }

          else  if($NetSalary<5000)
          {
                    $helper=0;
                    echo "not deserved Income  Tax  ";
                    $taxAmount=0;
                    echo "Tax Amount is : ".$taxAmount;
                    echo "<hr>";
                    $helper=($NetSalary*33.5)/100;

                    echo "<hr>";
                    echo "Helper Amount is  is : ".$helper;

                    echo "Net Salary Before Helper  is : ".$NetSalary;
                    echo "<hr>";
                    $NetSalary-=($helper);

                    echo "Net Salary After  Helper is : ".$NetSalary;

          }

          return $NetSalary;
          
}

AnalysisSalaryByTax($theNetForAnalysis);


echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

function greeting(): string {

          $msg="Welcome To Functions";
          echo $msg;
          return $msg;
}

greeting();

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");
function greetingFloat(): float {

          $msg=2.5;
          echo $msg;
          return $msg;
}

greetingFloat();

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");
function greetingBool(): bool {

          $msg=true;
          echo $msg;
          return $msg;
}

greetingBool();

?>
</body>
</html>