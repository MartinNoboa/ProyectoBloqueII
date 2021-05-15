@extends('layouts.main-landing')

@section('header')


<form action="{{ url('/donadores/')}}" method="post">

@csrf
@include('donadores.form',['modo'=>'Crear']);


</form>

@endsection
