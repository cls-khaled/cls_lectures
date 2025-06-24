<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ForeachByArrayDisplay </title>
</head>
<body>
    

@foreach($N as $ChildernNames)

<h1>{{$ChildernNames['name']}} </h1> 

<br/>

@endforeach
</body>
</html>