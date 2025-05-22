<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Abstractions </title>
</head>
<body>
          
<?php

abstract class Employee
{
         abstract function Welcome();

         abstract function Earning($fixedsalary,$bouns,$deduction);

         function theMessage()
         {
          echo("The Message");
         }
          
}

class Sales extends Employee
{
        function Welcome()
        {
          echo(" Sales Welcomeeeeeeeeeeee");
        }

         function Earning($fixedsalary,$bouns,$deduction)
         {
          return $fixedsalary+$bouns-$deduction;
         }
}

abstract class Managers extends Employee
{

          
}


echo("===================================================================");

abstract class Client
{
          //------ proeprty ----
        public $fisrtname;
        public $lastname;
        public $SSN;
        public $blanace;

        //-------------  Constructor ---------------

        function __construct($fn,$ln,$ssn,$bal)
        {
              $this->fisrtname=$fn;
              $this->lastname=$ln;
              $this->SSN=$ssn;
              $this->blanace=$bal;
        }

        abstract function DoTranasaction($amount);
}


class Deposite extends Client
{
          function __construct($fn,$ln,$ssn,$bal)
          {
                $this->fisrtname=$fn;
                $this->lastname=$ln;
                $this->SSN=$ssn;
                $this->blanace=$bal;
          }

          function DoTranasaction($amount)
          {
                    return $this->blanace+$amount;
          }

}

class WidthDraw extends Client
{
          function __construct($fn,$ln,$ssn,$bal)
          {
                $this->fisrtname=$fn;
                $this->lastname=$ln;
                $this->SSN=$ssn;
                $this->blanace=$bal;
          }

          function DoTranasaction($amount)
          {
                    return $this->blanace-$amount;
          }

}

//-------------------- Create Objects ----------------------

$operation="W";

switch($operation)
{
          case "D":

                    echo("============ Deposite Screen =====================");
                    echo("<br>");


                    $cDeposite=new Deposite("Ahmed","Ali","123355Ass",5000);

                    echo($cDeposite->fisrtname);

                    echo("<br>");
                    echo($cDeposite->lastname);

                    echo("<br>");
                    echo($cDeposite->SSN);

                    echo("<br>");
                    echo($cDeposite->blanace);

                    echo("<br>");

                    $BalanceAfterDeposite=$cDeposite->DoTranasaction(3000);
                       
                    echo("The New Balance After Deposite : ".$BalanceAfterDeposite);
                    break;


           case "W":
                    
                    echo("============ Withdraw Screen =====================");
                    echo("<br>");

                    $cWithDraw=new WidthDraw("Ahmed","Ali","123355Ass",5000);

                    echo($cWithDraw->fisrtname);

                    echo("<br>");
                    echo($cWithDraw->lastname);

                    echo("<br>");
                    echo($cWithDraw->SSN);

                    echo("<br>");
                    echo($cWithDraw->blanace);

                    echo("<br>");

                    $BalanceAfterWithDraw=$cWithDraw->DoTranasaction(3000);       
                    echo("The New Balance After Withdraw  : ".$BalanceAfterWithDraw);
                    break;
            
                    default:
                  echo("Invalid Operations");
                    break;

}
?>
</body>
</html>