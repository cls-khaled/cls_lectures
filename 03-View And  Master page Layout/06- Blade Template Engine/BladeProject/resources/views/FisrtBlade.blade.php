<!DOCTYPE html>
<html>
<head> </head>

<body>

<?php
if (1==1) {
   echo "<h1 style='color: green; font-size:30px'> Welcome To First Blade </h1>";
}
?>

<h1 style='color: green; font-size:30px'>  ---- Balde Syntax --------- </h1>

@if(1==1)
<h1 style='color: green; font-size:30px'> Welcome To First Blade by Blade ...</h1>
@endif

<h1 style='color: rgb(215, 95, 3); font-size:30px'>  ---- Balde Syntax By Var  --------- </h1>

@php
    $var=100;
    $name="omar";
@endphp
{{-- this Cooment In Blade Template Engine  --}}

<h1> ========== If Statment ================== </h1>
@if($var==200)
<h1 style='color: rgb(212, 12, 149); font-size:30px'> Welcome To First Blade by Blade ...</h1>
@else
<h1 style='color: rgb(195, 11, 11); font-size:30px'> its not Correct  value ...</h1>

@endif

<h1> ========== If and else If  Statment ================== </h1>

@if($name =="omar")
<p> the best boy </p>
@elseif($name=="ali")
<p> the Naughty boy</p>
@elseif($name=="raghda")
<p> the awesome wife</p>
@else
<p> i dont't know </p>
@endif

<h1> ===============  For by Balde  =========================</h1>

@for ($i = 0; $i < 5; $i++)
<h1 style='color: rgb(4, 97, 130); font-size:15px'> .... For By Balde ths number is {{$i}}...</h1> 
@endfor


<h1 style='color: rgb(215, 95, 3); font-size:30px'>  ---- Form Action by Csrf for Security   --------- </h1>

<h1> ===============  Foreach by Balde from Controller  =========================</h1>
@foreach($data as $_data)
<h1 style='color: rgb(215, 95, 3); font-size:30px'>{{$_data}} </h1>
@endforeach


<h1> ===============  For else  =========================</h1>
@forelse ($data as $_data)
<h1 style='color: rgb(215, 95, 3); font-size:30px'>{{$_data}} </h1>
@empty
<h1 style='color: rgb(215, 95, 3); font-size:30px'>empty Array  </h1>
@endforelse

<h1> ===============  Form  CSRF by Balde  =========================</h1>
<form>
    @csrf
    <input type="text"> <br/>
    <input type="text"> <br/>
    <input type="text"> <br/>
    <input type="text"> <br/>
    <input type="text"> <br/>
</form>    
</body> 
</html>