<!doctype html>
<html>

<head> <title> Trait  </title> </head>

<body>
<?php

/* له اسبقية التنفيذ قبل الكلاس */
/*---------  Traits  Apply Before Class Fisrt Priorty ------------- */
/* ------ treat To inhertance many Feauters becuse not exist Multi Inhertance */


trait Alltraits
{
    public function sayHello()
    {
        echo "Say Hello By Trait";
    }

}
class AppDevice
{
    public function sayHello()
    {
        echo "Say Hello By Class";
    }
}
class Iphone extends AppDevice
{

use Alltraits;



}




$iphone =new Iphone();
$iphone->sayHello();







?>
</body>
</html>