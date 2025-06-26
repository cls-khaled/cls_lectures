
@extends('Layout.MasterPage')

@section('BlankArea')
         <a  href="{{route('GetCategory')}}">  الصفحة الفئات</a> 


         <a  href="{{route('HomeRoute')}}">الصفحة الرئيسية</a>

         <a  href="{{route('SupplierRoute')}}"> عرض بيانات الموردين</a>

         @stop
