<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Inhertance </title>
</head>
<body>
          
<?php



class Employee{

          //------- Properties ----
          public $firstname;
          public $lastname;
          public $gender;
          public $salary;

          function __construct($fn,$ln,$G,$S)
          {
               $this->firstname=$fn;
               $this->lastname=$ln;
               $this->gender=$G;
               $this->salary=$S;
          }

          function earning() {
                     
                    return $salary;
          }




}

class Sales  extends Employee
{

          //--------- Property -
          public $target;
          public $bouns;

          function __construct($fn,$ln,$G,$S,$t,$b) {
                  
                    $this->firstname=$fn;
                    $this->lastname=$ln;
                    $this->gender=$G;
                    $this->salary=$S;

                    $this->target=$t;
                    $this->bouns=$b;
          }

          function earning() {
                     
                    return $this->salary+($this->target*$this->bouns)/100;
          }


}


class Labor  extends Employee
{

          //--------- Property ------------------
          public $target;
          public $bouns;

          function __construct($fn,$ln,$G,$S,$t,$b) {
                  
                    $this->firstname=$fn;
                    $this->lastname=$ln;
                    $this->gender=$G;
                    $this->salary=$S;

                    $this->target=$t;
                    $this->bouns=$b;
          }

          function earning() {
                     
                    return $this->salary+($this->target*$this->bouns)/100;
          }


}


//---------------- Calling Sales and Create Object ---------------

$Salesman=new Sales("Ahmed","ALI",true,5000,50000,10);

echo($Salesman->firstname);

echo("<br>");

echo($Salesman->lastname);

echo("<br>");

echo($Salesman->gender);

echo("<br>");

echo($Salesman->salary);

echo("<br>");

echo($Salesman->target);

echo("<br>");


echo($Salesman->bouns);

echo("<br>");
 
 $theNetSalary= $Salesman->earning();

 echo("Net Salary is : ".$theNetSalary);

?>
</body>
</html>