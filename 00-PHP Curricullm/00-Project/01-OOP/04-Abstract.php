<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    abstract class Employee{
        public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  //--------- Abstarct Function 
  abstract public function welcomeByDep() : string;
    }
    

    //------------- Class -------

    class sales extends Employee {
       
        public function welcomeByDep() : string {
            return " Welcome Sales ............";
          }
      }


      //-------------Abstract Class -------

   abstract class Manager extends Employee {
       
        
      }
    
    ?>
    
</body>
</html>