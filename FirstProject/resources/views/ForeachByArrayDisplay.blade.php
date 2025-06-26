


@extends('Layout.MasterPage')

@section('BlankArea')


@foreach($N as $ChildernNames)

<h1>{{$ChildernNames['name']}} </h1> 

<br/>

@endforeach


@stop
