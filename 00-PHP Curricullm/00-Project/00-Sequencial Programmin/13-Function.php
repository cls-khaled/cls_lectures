<html>
<head> 
    <title> Function</title>
</head>
<body>

<h1>====================== Function =======================</h1>
<?php

echo "<h1 style='color:red ; font-size:30px'> === Function=== </h1>"  ;

 #------- First Function ----------------

 function welcome()
 {
    echo "welcome to Php Function ";
 }

 welcome();
?>


<h1>====================== Function with Parameter  =======================</h1>

<?php

 function sumfn($n1,$n2)
 {
    $res=$n1+$n2;
    echo "<h1 color:green ; font-size:15px>".$res."</h1>";
 }

 sumfn(10,20);

 ?>

<h1>====================== Function Passing Argument by Value =======================</h1>

<?php


  function funByval($num)
  {
    $num+=5;
    echo "<h1 style='color:Green; font-size:20px'>".$num."</h1>";
  }

  $numTen=10;

  funByval($numTen);


  echo "<h1 style='color:red; font-size:25px'>".$numTen."</h1>";
  ?>

<h1>============= Function Passing Argument by Refernce  =================</h1>

 <?php
 

 function funByRef(&$numref)
 {
    $numref+=5;
    echo "<h1 style='color:Green; font-size:20px'>".$numref."</h1>";
 }
$numTenbyRef=10;

funByRef($numTenbyRef);

echo "<h1 style='color:red; font-size:25px'>".$numTenbyRef."</h1>";

?>


<h1>=============  Writing PHP Function which returns value =================</h1>
<?php

echo "<h1 style='color:red ; font-size:30px'> === Writing PHP Function which returns value === </h1>";

function funbyreturn($n1,$n2)
{
    $sum=$n1+$n2;
    return $sum;
}

$result=funbyreturn(10,20);
echo "<h1 style='color:blue;font-size:20px'>".$result."</h1>";

?>

 
<h1>========  Setting Default Values for Function Parameters  ============</h1>
<?php

function funByDefualtValue($param = null)
{
    echo $param;
}

funByDefualtValue("defualt Value");
echo "<br>";
funByDefualtValue(10);

?>

  
<h1>========  Dynamic Function Calls ============</h1>

<?php


function sayHello() {
    echo "Hello<br />";
 }
 
 $function_holder = "sayHello";
 $function_holder();

 ?>


  
 <h1>========   Function with Return Type ============</h1>
<?php

function earth(): void {
    $title = "This planet supports life";
    $age_in_years = 4_800_000_000;
  }
  
  earth();

//------------------------------------
function funbyReturnType($n1,$n2):int
{
    $res=$n1+$n2;
    echo "Result Is : $res";
    return $res;
}

funbyReturnType(10,30);

// -----------------------

echo "<br>";
function greeting(): string {
    return "Good day fellow!";
   }
   
   echo greeting();

   echo "<br>";
  //-----------------------
  function price(): float {
    return 10.56;
  }
  
  echo price();
  
  echo "<br>";

  //---------------------------------
  function pricebydecimal(): float {
    return -1.78;
  }
  
  echo pricebydecimal();

  echo "<br>";

  //--------------------------------
  function isComplete(): bool {
    return true;
  }
  
  echo isComplete();
  
  echo "<br>";
  function isAdult(int $age): bool {
    return $age >= 18;
  }
  
  echo isAdult(10);

  
 





  # ---------------- union -------------------
  /*
  What if we can not tell the actual type a class should return or do we want to
   intentionally make the return type for any class dynamic?

PHP allows us to include additional return types using the union type, 
this allows us to include alternate types by separating them with a pipe |.
  */

  function priceByUnion(): int | float {
    return 10;
  }
  
  function priceByUnion2(): int | float {
    return 10.4;
  }

  # ---------------- Null Value Return  -------------------

   function hello(): ?string {
    return null;
  }

   function number(): ?int {
    return null;
  }

   function pricenew(): ?float {
    return null;
  }

  hello();
  echo hello("welcome ");
  echo "<br>";
  number();
  echo number(20);
  echo "<br>";
  pricenew();
  pricenew(10.3);

?>
</body>
</html>