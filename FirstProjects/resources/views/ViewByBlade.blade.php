<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
{{$degree=99;}}



@if($degree>=50 && $degree<=60)

<h1> Pass </h1> 

@elseif($degree>60 && $degree<=80)

<h1> Good </h1> 

@elseif($degree>80 && $degree<=90)

<h1> very Good </h1> 


@elseif($degree>90 && $degree<=100)

<h1> Excellent</h1> 

@else

  <h1> Invalid Degree </h1>   

@endif
</body>
</html>