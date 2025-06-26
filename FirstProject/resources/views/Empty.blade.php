

@extends('Layout.MasterPage')

@section('BlankArea')


@empty($G)

<h1> Age IS NuLL ........... </h1>

@endempty

<h1> ====================================== </h1>

@if(empty($G))

<h1> Age IS NuLL ........... </h1>

@endempty       

@stop