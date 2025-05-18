<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> third Lesson </title>
</head>
<body>
    
<?php 

$firstname="Omar";

echo $firstname;

echo '<br>';

echo 'Welcome Mr : ',($firstname);

echo '<br>';

print ($firstname);

echo '<br>';

 echo "<h1 style='color:green'>",$firstname,"</h1>";

 $fixedsalary=1000;
 $bouns=500;
 $deduction=200;

 $netSalary;

 $netSalary=($fixedsalary+$bouns)-$deduction;

 
?>

<h1 style="color:red; font-size:50px">
    <?php 
    echo $netSalary;
    ?>



<hr style="width:100%; height:5px; background-color:red">

<h1>=========================== Concatination ==========================</h1>

<?php

$firstname="omar";
$lastname="Mahmoud";

echo("First Name IS : ".$firstname);

echo "<br>";


echo("First Name IS : ".$firstname."Last Name is :".$lastname);


echo "<br>";


echo("First Name IS : ".$firstname." <br> Last Name is :".$lastname);


?>


</h1>
</body>
</html>