@extends('layouts.main-landing')



@section('header')


<form action="{{ url('/reporte')}}" method="post">

@csrf
@include('reporte.form',['modo'=>'Crear']);


</form>

@endsection
