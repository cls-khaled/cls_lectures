<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

echo "<h1>================= Before Casting Data type ============================= </h1>";
echo 5+"5 Lessons"; /*========= Calculate And Print Warning */
echo "<br>";


echo "<h1>================= After  Casting Data type ============================= </h1>";
echo "<h1> Implicit and Explicit Data type  </h1>";
echo 5+(int)"5 Lessons"; 
echo "<br>";



echo "<h1>================= After  Casting Data type ============================= </h1>";
echo 5+(integer)"5 Lessons"; 
echo "<br>";



echo "<h1>================= After  Casting Data type ============================= </h1>";
echo 5+( integer )"5 Lessons"; 
echo "<br>";



echo "<h1>================= Get Type After  Casting Data type ============================= </h1>";
echo gettype( 5+(integer)"5 Lessons");
echo "<br>";




echo "<h1>================= Before  Casting FLoat  ============================= </h1>";
echo  10+25.5; 
echo "<br>";


echo "<h1>================= After Casting FLoat  ============================= </h1>";
echo  10+(int)25.5; 
echo "<br>";



echo "<h1>================= Get Type  After Casting FLoat  ============================= </h1>";
echo gettype( 10+(int)25.5); 
echo "<br>";




echo "<h1>=================  ============================= </h1>";
echo 25.5+25.5; 
echo "<br>";


echo "<h1>=================  Double + Double  Get Type  ============================= </h1>";
echo  gettype(25.5+25.5); 
echo "<br>";



echo "<h1>=================  ============================= </h1>";
echo (int)25.5+ (int)25.5; 
echo "<br>";



echo "<h1>=================  ============================= </h1>";
echo gettype((int)25.5+ (int)25.5); 
echo "<br>";

?>
</body>
</html>