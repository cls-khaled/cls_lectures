<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


$numbers[0]=1;
$numbers[1]=2;
$numbers[2]=3;
$numbers[3]=4;
$numbers[4]=5;

foreach($numbers as $n)
{
    echo "<h2 style ='color:green ; font-size:2em' > the Value is: " .$n."</h2>";

}


echo("<hr>");


foreach($numbers as $abo)
{
          echo "<h2 style ='color:green ; font-size:2em' > the Value is: " .$abo."</h2>";
}
?>

<h1>=======================================================</h1>

<?php

$FirstMethodArray=array(10,20,30,40,50,60,70,80,90);

foreach($FirstMethodArray as $FMArr)
{
    echo "The Value Of Array is : $FMArr <br>";
}


?>


<h1>=======================================================</h1>
<?php
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

?>
</body>
</html>