<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
interface Employee {
  public function welcome();
  public function earning($salary, $bouns);
 
}


interface Department
{
    public function departentFun() : string;
} 

class sales implements  Employee,Department
{
    public function welcome()
    {
        echo("Welcome");
    }

    public function earning($salary, $bouns)
    {
        return $salary+$bouns;
    }

    public function departentFun() : string
    {
        return "HR";
    }
}
?>
</body>
</html>