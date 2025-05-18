<?php

require 'Apple.php';
require 'Nokia.php';
require 'Sony.php';
require 'SamSung.php';

echo "<h1 style='color:green; font-size:30ppx'> ==================== </h1>";
$Mobile=new Nokia\Creatphone();
$Mobile->sayHello();
print_r($Mobile);

echo "<h1 style='color:green; font-size:30ppx'> ==================== </h1>";
$Mobile=new Sony\Creatphone();
$Mobile->sayHello();
print_r($Mobile);

echo "<h1 style='color:green; font-size:30ppx'> ==================== </h1>";
$Mobile=new Apple\Creatphone();
$Mobile->sayHello();
print_r($Mobile);

echo "<h1 style='color:green; font-size:30ppx'> ==================== </h1>";
$Mobile=new Samsung\Hardware\Phones\Creatphone();
$Mobile->sayHello();
print_r($Mobile);


?>