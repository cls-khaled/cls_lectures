<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> Class</title>
</head>
<body>
          <?php
          
          class Employee
          {
                    //----------- Properties ------
           public $firstname; //--- get And Set 
           public $lastname;
           public $address;
           public $salary;

           //------------ Constructor ---------------------

           function __construct($fn,$ln, $add, $s)
           {
             $this->firstname= $fn;  //------ Properties = parameter 
             $this->lastname= $ln;
             $this->address= $add;
             $this->salary= $s;
           }

            function welcome()
            {
                    echo(" Welcome To Employee class ");
            }
            
            function CalcSalary($fixedsalary,$bouns,$deductions) {
                    
                    $net=$fixedsalary+$bouns-$deductions;
                    return $net;

            }


            function __destruct()
            {
                 echo(" terminate the Class .............");
            }

          } //---- End Class 

          $emp= new Employee("Ahmed","Ali","Alex",8000); //----------- Constructor

         

          //  $emp->firstname="Ahmed";
          //  $emp->lastname="Ali";
          //  $emp->address="Giza";
          //  $emp->salary=5000;


           echo($emp->firstname);

           echo("<br>");

           echo($emp->lastname);

           echo("<br>");
           echo($emp->address);

           echo("<br>");
           echo($emp->salary);

           echo("<br>");

           $emp->welcome();

          $thenet=$emp->CalcSalary(5000,2000,1000);

          echo("<br>");

          echo("the Net is : ".$thenet);


          echo("<br>");

          echo("<br>");
          echo("============================================================");

          echo("============================= Product ===============================");

          class Product
          {
            //---------- Property ----------
           public  $productname;
           public $productdescription;
           public $price;
           public $Qty;

           function __construct($pron,$prodesc,$p,$Q)
           {
               $this->productname=$pron;  //-------------- property = parameters 
               $this->productdescription=$prodesc;
               $this->price=$p;
               $this->Qty=$Q;

           }

           function PriceEngine($THEQTY,$purchasingPrice) {
                    
                    $salePrice=0;
                    if($THEQTY>10)
                    {
                         $salePrice=$purchasingPrice+($purchasingPrice*10)/100;
                    }
                    else
                    {
                              $salePrice=$purchasingPrice+($purchasingPrice*20)/100;       
                    }

                    return $salePrice;
           }


           function PriceEngineByProeprty($Q,$pp) {
                    
                    $salePrice=0;

                    if($Q>10)
                    {
                         $salePrice=$pp+($pp*10)/100;
                    }
                    else
                    {
                              $salePrice=$pp+($pp*20)/100;       
                    }

                    return $salePrice;
           }
          }

          //----------- craete Object -----

          $pro1=new Product("Mobile","Iphone",1000,20);

          echo("<br>");

          echo($pro1->productname);

          echo("<br>");
          echo($pro1->productdescription);

          echo("<br>");
          echo($pro1->price);

          echo("<br>");

          echo($pro1->Qty);

          echo("<br>");
          echo("<br>");

         echo("The Net Price : ".$pro1->PriceEngine(6,2000));

         echo("<br>");
         echo("The Net Price : ".$pro1->PriceEngineByProeprty($pro1->Qty,$pro1->price));

         

          ?>
</body>
</html>