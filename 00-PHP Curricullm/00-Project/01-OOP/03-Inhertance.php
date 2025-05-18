<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inhertance </title>
</head>
<body>
    

    
<?php
class Employee {
  public $firstname;
  protected $lastname;
  private $address;

  //------------ Constructor -------------

  public function __construct($fname, $lname) {
    $this->firstname = $fname;
    $this->lastname = $lname;
  }

  function welcome($n) {  // a public function (default)
    echo("Welcome Employee");
  }
  public function earning($fixedSalary,$bouns,$deduction) { // a Public function
     return $fixedSalary+$bouns-$deduction;
  }
   
  protected function earningProtected($fixedSalary,$bouns,$deduction) { // a protected function
    return $fixedSalary+$bouns-$deduction;
 }

  protected function EmployeeInfo()
  {
    echo("Welcome Our Employee");
  }

}

//---------------------- Sales ---------------------
class Sales extends Employee {

    public $bouns;
    public $lastname;
    
    //----------- Constructor  ----------
    public function __construct($fname, $lname,$bouns) {
        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->$bouns =$bouns;
      }
  
     
    public function EmployeeSalesInfo()
    {
        // Call protected method from within derived class - OK
        $this->EmployeeInfo();
    }

    //----------------

    public function earningSalesProtected($F,$B,$D)
    {
    //    return $this->earningProtected(1000,2000,500);
           return $this->earningProtected($F,$B,$D);
    }
    
}



$EmpSales = new Sales("Ali","Mahmoud","GIZA");
$EmpSales->firstname = 'Omar'; 
$EmpSales->lastname = 'Mahmoud';
$EmpSales->address = 'Giza';

$EmpSales->bouns = 5000;

echo ("================================================");
echo "</br>";
echo($EmpSales->firstname); 
echo "</br>";
echo($EmpSales->lastname);
echo "</br>";
echo($EmpSales->address);
echo "</br>";
echo($EmpSales->bouns);


echo "</br>";

echo ("================================================");

echo "</br>";




$EmpSales->earning(5000,1000,500);

echo "</br>";

echo ($EmpSales->earning(5000,1000,500));


echo "</br>";

echo ("================================================");

echo "</br>";

$EmpSales->EmployeeSalesInfo();

echo "</br>";

echo ("================================================");

echo "</br>";


$EmpSales->earningSalesProtected(5000,1000,500);

echo "</br>";

echo($EmpSales->earningSalesProtected(5000,1000,500));

?>

</body>
</html>