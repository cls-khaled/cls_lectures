<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
{{$Deg;}}



@if($Deg>=50 && $Deg<=60)

<h1> Pass </h1> 

@elseif($Deg>60 && $Deg<=80)

<h1> Good </h1> 

@elseif($Deg>80 && $Deg<=90)

<h1> very Good </h1> 


@elseif($Deg>90 && $Deg<=100)

<h1> Excellent</h1> 

@else

  <h1> Invalid Degree </h1>   

@endif
</body>
</html>