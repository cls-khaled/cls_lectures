<!doctype html>
<html>

<head> <title> Trait  </title> </head>

<body>
<?php

/*--------- All Traits ------------- */
/* ------ treat To inhertance many Feauters becuse not exist Multi Inhertance */
trait FingerPrint
{
    public function fingerprintFeatures()
    {
       echo "---- Finger Print Features ----- <br>";
       return $this;
    }
}

trait TouchScreen
{
    public function touchScreenFeatures()
    {
       echo "---- touch Screen  Features ----- <br>";
       return $this;
    }
}

trait FaceDetected
{
    public function faceDetectedFeatures()
    {
       echo "---- Face Detected  Features ----- <br>";
       return $this;
    }
}

trait Alltraits
{
    use FingerPrint, TouchScreen,FaceDetected;

}
class Iphone
{

use FingerPrint, TouchScreen,FaceDetected;

public function sayHello()
{
    echo "Say Hello --------------------";
}

}

class Sony
{

    use Alltraits;
    public function sayHello()
{
    echo "Say Hello --------------------";
}

}
class Nokia
{
    use Alltraits;
    public function sayHello()
{
    echo "Say Hello --------------------";
}

}



$iphone =new Iphone();
$iphone->fingerprintFeatures();
$iphone->touchScreenFeatures();
$iphone->faceDetectedFeatures();

$iphone->sayHello();
echo "<pre>"; print_r($iphone); echo "</pre>";

//---------------------------------------------------------

$sony =new Sony();
echo "<pre>"; print_r($sony); echo "</pre>";

$sony->fingerprintFeatures();
$sony->touchScreenFeatures();

$sony->sayHello();
//---------------------------------------------------------

$nokia =new Nokia();


$nokia->faceDetectedFeatures();

$nokia->sayHello();

echo "<pre>"; print_r($nokia); echo "</pre>";


?>
</body>
</html>