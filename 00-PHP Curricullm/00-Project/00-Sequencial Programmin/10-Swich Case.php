<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>================== Swich case ============================ </h1>
<?php


$daybyswitch="sat";
switch($daybyswitch)
{
    case "sat":
    echo "this day is saturday";
        break;
    case "sun":
        echo "this day is Sunday";
        break;
        case "Mon":
            echo "this day is Monday";
            break;
            default:
            echo "out Of Scope";
            break;

}


?>
</body>
</html>