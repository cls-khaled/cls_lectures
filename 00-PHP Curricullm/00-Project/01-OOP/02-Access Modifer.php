<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Access Modifer </title>
</head>
<body>
    
<?php
class Employee {
  public $firstname;
  protected $lastname;
  private $address;

  //--------------

  function EmployeeName($n) {  // a public function (default)
    $this->firstname = $n;
  }
  protected function EmployeeLastName($n) { // a protected function
    $this->lastname = $n;
  }
  private function EmployeeAddress($n) { // a private function
    $this->address = $n;
  }

}

$Emp = new Employee();
$Emp->firstname = 'Omar'; // OK

echo ($Emp->firstname);
// $Emp->lastname = 'Mahmoud'; // ERROR
// $Emp->address = 'Giza'; // ERROR

echo("========== Call Function ===================");

$Emp->EmployeeName('Ali'); // OK
$Emp->EmployeeLastName('Mahmoud'); // ERROR
$Emp->EmployeeAddress('alex'); // ERROR

?>

<h1>========== Static Function =============</h1>

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>

<h1>========== Static methods can also be called from methods in other classes. To do this, the static method should be public: =============</h1>

<?php
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();
?>

<h1>========== Static  Property =============</h1>


<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>

<h1>========== Static  Property and Inhertance =============</h1>

<?php
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>
</body>
</html>