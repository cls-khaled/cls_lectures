<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- https://www.w3schools.com/php/php_oop_access_modifiers.asp -->
</head>
<body>
    

<?php
class Employee {
  // Properties
  public $firstName;
  public $Lastname;
  public $Salary;

  //---------------- Constructor--------------------
  function __construct($firstName,$Lastname,$Salary) {
    $this->firstName = $firstName;
    $this->Lastname = $Lastname;
    $this->Salary = $Salary;
  }

  //-------------- Destructor -----------------------

  function __destruct() {

    echo"<br>";

    echo " =============== The  End ===================";

    echo"<br>";
  }

  // Methods

  function EmpInfo()
  {
    echo "Welcome To Employee ";
  }
   
  function CalaSalary($fixedsalary,$bouns,$deduction)
  {
    $Net=$fixedsalary+$bouns-$deduction;
    echo "Net Salary IS : ".$Net;
  }
}


$Emp=new Employee("Omar","Mahmoud",9800);

$Emp->firstName="Ali";
$Emp->Lastname="Mahmoud";
$Emp->Salary=5000;

echo $Emp->firstName;

echo "<br>";
echo $Emp->Lastname;
echo "<br>";

echo $Emp->Salary;

echo "<h1>===========================================</h1>";

$Emp->EmpInfo();

echo "<h1>===========================================</h1>";

$Emp->CalaSalary(5000,2000,350);


echo "<h1>===========================================</h1>";


$Emp=new Employee("Omar","Mahmoud",9800);


echo $Emp->firstName;

echo "<br>";
echo $Emp->Lastname;
echo "<br>";

echo $Emp->Salary;
?>

</body>
</html>