<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo 1 +2;

echo "<br>";

echo "<h1> ===========================================================</h1>";

echo 1 +"2"; /* =3 With Parse Function */

echo "<br>";

echo "<h1> ===========================================================</h1>";

echo 1 +"5 Lessons"; /* =6 With Parse Function */

echo "<br>";

echo "<h1> ===========================================================</h1>";

echo gettype(1 +"5 Lessons") ; /* Integar  */

echo "<br>";

echo "<h1> ===========================================================</h1>";

echo gettype(1+"2");

echo "<br>";

echo "<h1> ===========================================================</h1>";

echo true+true; /* true = 1 + true = 1 = 2*/ 

echo "<br>";

echo "<h1> ===========================================================</h1>";

echo gettype(true+true); /* integar */

echo "<br>";

echo "<h1> ===========================================================</h1>";


echo 10+20.5; /* 30.5 */

echo "<br>";

echo "<h1> ===========================================================</h1>";

echo gettype( 10+20.5); /* Float */

echo "<br>";

?>
</body>
</html>