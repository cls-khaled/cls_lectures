<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Functions </title>
</head>
<body>
        
<?php


function Welcome()
{
          echo("Welcome To Functions ");         
}


Welcome();

echo("<hr style='color:red;width:100%;height:30px; background-color:green'>");

function WelcomebyUserName($fname) {
          
          echo("Welcome Mr : ".$fname);

}


WelcomebyUserName("Ahmed");
?>
</body>
</html>