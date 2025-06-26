
@extends('Layout.MasterPage')

@section('BlankArea')

@include('Include.popUp')


<a  href="{{route('GetCategory')}}">  الصفحة الفئات</a> 


<a  href="{{route('HomeRoute')}}">الصفحة الرئيسية</a>

<a  href="{{route('SupplierRoute')}}"> عرض بيانات الموردين</a>

<a  href="{{route('IndexByController')}}"> Home By Controller </a>

<a  href="{{route('CreateByController')}}"> Create By Controller </a>  

<a  href="{{route('CallByViewIndex')}}">  Index By View </a> 

<a  href="{{route('RouteByViewInternalFolder')}}">  Route By View Internal Folder</a> 

<a  href="{{route('RouteBySendparameter')}}"> Route By Send parameter</a> 

<a  href="{{route('RouteSendMultiParams')}}"> Route Send Multi Param</a> 

<a  href="{{route('RouteSendByArray')}}">  Route Send By Array</a> 
  
<a  href="{{route('RouteByIF')}}">   اعرف دراجتك</a> 

<a  href="{{route('RouteByISSet')}}">   شوف سنك</a> 

<a  href="{{route('RouteByEmpty')}}">   فاضية ولا مش فاضية</a> 

<a  href="{{route('RouteByForeach')}}"> Childer Names  </a> 

<a  href="{{route('GetComingSoon')}}">About US  </a> 

<a  href="{{route('GetComingSoonCat')}}">Get Coming Soon Cat  </a>

   
@stop
    