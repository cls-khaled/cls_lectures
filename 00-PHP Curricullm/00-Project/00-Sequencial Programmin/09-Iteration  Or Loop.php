<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1> ================== For ======================= </h1>
<?php


$x=0;
for($x=0;$x<10;$x++)
{

    echo("Counter is : $x <br>");
}       


?>

<h1>==========================  While================================ </h1>
<?php


$rootnumber=0;
while($rootnumber<10)
{
    echo("Root is : $rootnumber <br>");

    $rootnumber++;
}


?>


<h1>========================== DO  While ================================ </h1>

<?php

$rootByDoWhile=0;

do
{
 echo("Root IS : $rootByDoWhile <br>");
 $rootByDoWhile++;
}
while($rootByDoWhile<10);

?>


<h1> ================== Break  ========================== </h1>

<?php

$x=0;

for($x=0;$x<10;$x++)
{
    echo("Counter is : ".$x);
    echo "<br>";
    if($x==5)
    {
        break;
    }
}

?>


<h1> ==================  Continue ========================== </h1>

<?php

$x=0;

for($x=0;$x<10;$x++)
{
   
    if($x==5)
    {
        continue;
    }

    echo("Counter is : ".$x);
    echo "<br>";

    
}

?>
</body>
</html>