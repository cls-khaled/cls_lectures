<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<h1> ============= Boolean ======================</h1>";
echo gettype(true);

echo '<br>';

echo gettype(false);

echo '<br>';

echo "<h1> ============= Integar ======================</h1>";

echo gettype(1500);

echo '<br>';

echo "<h1> ============= Integar ======================</h1>";

echo gettype(-90);

echo '<br>';


echo "<h1> ============= String ======================</h1>";

echo gettype("Omar Mahmoud");

echo '<br>';

echo "<h1> =============  Double = FLoat ======================</h1>";

echo gettype(20.55);

echo '<br>';

echo "<h1> ============= Double = FLoat  ======================</h1>";

echo gettype(-90.55);

echo '<br>';

echo "<h1> =============Array  ======================</h1>";

echo gettype(array("EG"=> "Egypt","SA" =>"Sudan","IT"=>"Italy"));

echo '<br>';


echo "<h1> =============Array  ======================</h1>";

echo gettype(array("Egypt","Sudan","Italy"));

echo '<br>';


?>
</body>
</html>