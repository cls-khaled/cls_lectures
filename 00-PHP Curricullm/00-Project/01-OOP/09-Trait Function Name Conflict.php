<!doctype html>
<html>

<head> <title> Trait  </title> </head>

<body>
<?php

/* لو حصل كونفليكت بين اسماء الفانكشن فى اكثر من تريات */


trait Feature1
{
    public function sayHello()
    {
        echo "Say Hello Feature 1";
    }

}
trait Feature2
{
    public function sayHello()
    {
        echo "Say Hello Feature 2 ";
    }
}
class Iphone 
{

use Feature1,Feature2{

    //--- assign my need treat --------------
    Feature2::sayHello insteadOf Feature1;

    //--- alias name to function when occure Conflict 
    Feature2::sayHello as OmarHello;
}



}




$iphone =new Iphone();
$iphone->sayHello();
echo "<br>";
$iphone->OmarHello();







?>
</body>
</html>