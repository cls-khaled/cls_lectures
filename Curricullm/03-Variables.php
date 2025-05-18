<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Variables  </title>
</head>

<style>

.fnameclass{
          color:red;
          font-size:4em
}
</style>          
<body>
    
<?php

$firstName="Abdo";

echo $firstName;

echo "<br>";


echo "Welcome MR : ",$firstName;

echo "<h1 class='fnameclass'>$firstName </h1>";


$fixedSalary=5000;
$bouns=2000;
$deduction=1000;


$netSalary=($fixedSalary+$bouns)-$deduction;

echo "<h1 class='fnameclass'> The net Salary :  $netSalary Le </h1>"; /*  Data bind */

echo "<hr style='color:red; height:20px; width:100%'>";

echo "<h1> ========== Concatinate ==================== </h1>";


?>

<?php


$fname="Ali";
$lname="Omar";

echo "First name is : ".$fname."<br>"."Last name is ".$lname;

echo("First Name IS : ".$fname." <br> Last Name is :".$lname);


?>

</body>
</html>