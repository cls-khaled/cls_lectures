<!doctype html>
<html>

<head> <title> Trait  </title> </head>

<body>
<?php

/* ------ treat To inhertance many Feauters becuse not exist Multi Inhertance */
trait FingerPrint
{
    public function fingerprintFeatures()
    {
       echo "---- Finger Print Features ----- <br>";
    }
}

trait TouchScreen
{
    public function touchScreenFeatures()
    {
       echo "---- touch Screen  Features ----- <br>";
    }
}

trait FaceDetected
{
    public function faceDetectedFeatures()
    {
       echo "---- Face Detected  Features ----- <br>";
    }
}

class Iphone
{

use FingerPrint;
use TouchScreen;
use FaceDetected;

public function sayHello()
{
    echo "Say Hello --------------------";
}

}

class Sony
{

    use FingerPrint;
    use TouchScreen;

    public function sayHello()
{
    echo "Say Hello --------------------";
}

}
class Nokia
{
    use FaceDetected;
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