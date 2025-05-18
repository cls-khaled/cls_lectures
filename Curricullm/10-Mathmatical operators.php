<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> mathmatical operators </title>


</head>
<body>
          
<?php

echo "========== Increment Operators ======================";

echo "==========  post Fix  ======================";

$num1=5;

echo("<br>");
echo($num1++);
echo("<br>");
echo($num1++);
echo("<br>");
echo($num1++);
echo("<br>");
echo($num1++);
echo("<br>");
echo($num1++);
echo("<br>");
echo($num1++);


echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");


echo "==========  pre Fix  ======================";

$num2=5;

echo("<br>");
echo(++$num2);
echo("<br>");
echo(++$num2);
echo("<br>");
echo(++$num2);
echo("<br>");
echo(++$num2);
echo("<br>");
echo(++$num2);
echo("<br>");
echo(++$num2);
echo("<br>");

echo "==========Decrement Operators ======================";
echo("<br>");
echo "==========  post Fix  ======================";

$num3=5;

echo("<br>");
echo($num3--);
echo("<br>");
echo($num3--);
echo("<br>");
echo($num3--);
echo("<br>");
echo($num3--);
echo("<br>");
echo($num3--);
echo("<br>");
echo($num3--);
echo("<br>");
echo($num3--);
echo("<br>");

echo "==========  pre Fix  ======================";
echo("<br>");
$num4=5;

echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);
echo("<br>");
echo(--$num4);

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

echo("=========== Compound Operators ==========================");

echo("<br>");

$A=10;
$B=2;

// echo("Result is : ".$A+=$B);

// echo("Result is : ".$A-=$B);

// echo("Result is : ".$A*=$B);

// echo("Result is : ".$A/=$B);

echo("Result is : ".$A%=$B);
?>
</body>
</html>