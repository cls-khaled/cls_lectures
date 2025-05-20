<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<h1> ============== Create Array  ======================= </h1>";

$arrayofelement=array(10,20,30,40,50);


echo $arrayofelement[0];

echo "<br>";
echo $arrayofelement[1];
echo "<br>";
echo $arrayofelement[2];
echo "<br>";
echo $arrayofelement[3];
echo "<br>";
echo $arrayofelement[4];


echo "<h1> ============== Create Array By Another Synatx ======================= </h1>";
$carsNewSynatx = ["Volvo", "BMW", "Toyota"];
echo  $carsNewSynatx[0];

echo "<br>";


echo  $carsNewSynatx[1];

echo "<br>";


echo  $carsNewSynatx[2];

?>


<h1>====================================================================== </h1>

<?php

$StudentName=array("Omar","Ali","Ahmed","Sameh");

echo "Student Num1 IS: ".$StudentName[0];

echo "<br>";

echo "Student Num1 IS: ".$StudentName[1];

echo "<br>";

echo "Student Num1 IS: ".$StudentName[2];


echo "<br>";

echo "Student Num1 IS: ".$StudentName[3];
?>


<h1> ================== Array Keys ====================== </h1>

<?php

$carsByKey = [
    999 => "Volvo",
    222 => "BMW",
   25=>"Toyota"
  ];

  echo $carsByKey[999];

  echo "<br>";
  echo $carsByKey[222];

  echo "<br>";

  echo $carsByKey[25];


  echo "<br>";

  echo "===============================================";

  $myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
  ];

  echo "<br>";

  echo $myCar['brand'];

  echo "<br>";

  echo $myCar['model'];

  echo "<br>";
  echo $myCar['year'];

  echo "<br>";

?>

<h1> ================ Declare Empty Array ================== </h1>
<?php

$carsByEmpty = [];
$carsByEmpty[0] = "Volvo";
$carsByEmpty[1] = "BMW";
$carsByEmpty[2] = "Toyota";


echo $carsByEmpty[0];
echo "<br>";
echo $carsByEmpty[1];
echo "<br>";
echo $carsByEmpty[2];
?>


<h1>=================== associative arrays =======================</h1>

<?php

$fname;
$fname="Ahmed";
$fullname="Ahemd Elsharawky";

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;


echo $myCar["brand"];
echo "<br>";
echo $myCar["model"];
echo "<br>";
echo $myCar["year"];


?>

<h1>====================== Mixing Array Keys ================================== </h1>

<?php

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";


echo $myArr[0];
echo "<br>";
echo $myArr[1];
echo "<br>";
echo $myArr["fruit"];

?>




<h1>=============================== Array by Count  ======================================= </h1>

<?php
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota","Verna");
echo count($cars);
?>



<h1>================ Array by Var Dump   ====== </h1>


<?php
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");

echo $cars[0];
echo "<br>";

echo $cars[1];
echo "<br>";

echo $cars[2];
echo "<br>";


var_dump($cars);

?>

<h1>================ Array by  Replace Element By Index  ====== </h1>

<?php

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);


?>

<h1> ================ Associative Arrays ================= </h1>

<?php

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

var_dump($car);


echo "<h1>  ============== Access Associative Arrays ===================== </h1>";

$carNew = array("brand"=>"Merceds", "model"=>"C110", "year"=>2010);
echo $carNew["model"];

echo "<br>";
echo $carNew["brand"];

echo "<br>";

echo $carNew["year"];



echo "<h1>  ============== Change Value  ===================== </h1>";

$carNew2 = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$carNew2["year"] = 2024;

var_dump($car);

echo "<br>";

echo $carNew2["model"];

echo "<br>";
echo $carNew2["brand"];

echo "<br>";

echo $carNew2["year"];
?>


<h1> =============== Add Array Item  ============== </h1>

<?php
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

echo $fruits[0];

echo "<br>";

echo $fruits[3];

echo "<h1>============== Associative Arrays  =========</h1>";


$carsAddArray = array("brand" => "Ford", "model" => "Mustang");
$carsAddArray["color"] = "Red";
$carsAddArray["Year"] = "2025";

echo "<br>";

echo  $carsAddArray["color"];
echo "<br>";
echo  $carsAddArray["brand"];
echo "<br>";
echo  $carsAddArray["model"];
echo "<br>";
echo  $carsAddArray["Year"];

echo "<br>";
echo "<br>";

var_dump($carsAddArray);




echo "<h1>============== Associative Arrays  =========</h1>";

$carsAssociativeArray = array("brand" => "Ford", "model" => "Mustang");
$carsAssociativeArray += ["color" => "red", "year" => 1964];

echo  $carsAssociativeArray["color"];
echo "<br>";
echo  $carsAssociativeArray["year"];



echo "<h1> ============= Associative Arrays ================= </h1>";

$EmployeeSalary=array("ali"=>2000 , "Omar" => 4000 , "Mahmoud"=>5000);

echo "Salay Mahmoud is : ".$EmployeeSalary["Mahmoud"]."</br>";
echo "Salary ali is : ".$EmployeeSalary["ali"]."</br>";

?>


<h1> ============== Remove Array Item =================== </h1>

<?php

echo "<h1> array_splice() function you specify the index (where to start) and how many items you want to delete </h1>";

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);

echo "<br>";

var_dump ($cars);

echo "<br>";


echo "<h1> ========= unset Function =========== </h1>";

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);

echo "<br>";

echo  $cars[0];
echo  $cars[1];
echo  $cars[2];

echo "<br>";

echo "<h1> ========= Remove Multiple Array Items  =========== </h1>";

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);

echo "<br>";

echo  $cars[0];

echo "<h1> ========= Remove Multiple Array Items  =========== </h1>";

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);

echo "<br>";
echo $cars[2];

echo "<br>";
var_dump($cars);

echo "<br>";
print_r($cars);

echo "<br>";

echo "<h1> ========= Remove Item From an Associative Array =========== </h1>";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);

echo "<br>";

echo "<h1> ========= Using the array_diff Function =========== </h1>";

/*
You can also use the array_diff() function to remove items from an associative array.

This function returns a new array, without the specified items.
*/

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);

print_r($newarray);
echo "<br>";
echo $newarray["brand"];

echo "<br>";
echo $newarray["model"];

echo "<br>";

echo $newarray["year"];

echo "<br>";

echo "<h1> ========= Remove the Last Item =========== </h1>";

/*
The array_pop() function removes the last item of an array.
*/

$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);

echo "<br>";

echo $cars[0];
echo "<br>";
echo $cars[1];

echo "<br>";

echo $cars[2];

echo "<h1> ========= Remove the First Item=========== </h1>";
echo "<br>";

/*
The array_shift() function removes the first item of an array.
*/
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);

echo $cars[0];

echo "<br>";

echo $cars[1];




?>


<h1> ============== Sorting Arrays ============= </h1>
<?php

echo "<h1> ==================== Sort ascending ===== </h1>";
echo "<br>";


$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

// echo "<br>";
// print_r($car);

echo "<br>";
var_dump ($cars);

echo "<br>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
var_dump ($numbers);


echo "<h1> ==================== Sort Descending  ===== </h1>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);


echo "<br>";


var_dump($cars);

echo "<br>";

echo $cars[0];

echo "<br>";

echo $cars[1];
echo "<br>";

echo $cars[2];
echo "<br>";


$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

var_dump($numbers);

echo $numbers[0];
echo "<br>";
echo $numbers[1];
echo "<br>";
echo $numbers[2];
echo "<br>";
echo $numbers[3];
echo "<br>";
echo $numbers[4];
echo "<br>";


echo "<h1> ==================== Sort Descending  ===== </h1>";


$age = array("Joe"=>"43","Peter"=>"35", "Ben"=>"37");
asort($age);

var_dump($age);

echo "<br>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

var_dump($age);

?>


<h1> ============== Multidimensional Arrays =================== </h1>
<?php



$MultiArray=array(
"Ali"=>array("Math"=>50,"Chemistry"=>80,"Arabic"=>95),
"omar"=>array("Math"=>77,"Chemistry"=>88,"Arabic"=>99),
"Mahmoud"=>array("Math"=>66,"chemistry"=>75,"Arabic"=>66)

);

echo "<h1 style='color: green ; font-size:18px'>".$MultiArray["Ali"]["Math"]."</h1>";
echo "<h1 style='color:green ; font-size:18px'>".$MultiArray["Ali"]["Chemistry"]."</h1>";
echo "<h1 style='color:green ; font-size:18px'>".$MultiArray["omar"]["Math"]."</h1>";


?>
</body>
</html>