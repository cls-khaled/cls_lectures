<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> ============== Single Statement ====================== </h1>
<?php

$userName="Omar";
$password="123456";

if($userName=="Omar" && $password=="123456")
{
    echo "<h1> Welcome MR : " .$userName."</h1>";
}
else
{
    echo "Invalid User Name or Password";
}


?>

<h1> ============== Single Statement ====================== </h1>

<?php

$Degree=60;

if($Degree>=50 && $Degree<=60)
{
    echo "Pass";
}
else if($Degree>60 && $Degree<=70)
{
    echo "Good";
}
else if($Degree>70 && $Degree<=90)
{
    echo "Very Good";
}
else if($Degree>90 && $Degree<=100)
{
    echo " Excellent ";
}
else if($Degree <50)
{
    echo " fail ";
}
else
{
    echo " Out OF Scope  ";
}
?>


<h1> ============== Nested IF Statement ====================== </h1>

<?php

$Nationality="EG";
$age=30;
$Qulifiation="CS";
$ExperinceYear=5;
$ExpectedSalary=6000;


if($Nationality=="EG" || $Nationality=="SA")
{
         
 if($age>=20|| $age<=40)
{
            
    if($Qulifiation=="CS"|| $Qulifiation=="ART")
    {
    
        if($ExperinceYear>=3 && $ExperinceYear<=6)
        {
                 
            if($ExpectedSalary>=3000 && $ExpectedSalary<=6000)
            {
            
                echo "........... Congratularions .............";
            }
            else
            {
                echo "Invalid Qulification";
            }
        
        }
        else
        {
            echo "Invalid Qulification";
        }

        
    }
    else
    {
        echo "Invalid Qulification";
    }



}
else
{
    echo "Invalid Age";
}

}
else
{
    echo "Invalid Nationality";
}

?>

</body>
</html>