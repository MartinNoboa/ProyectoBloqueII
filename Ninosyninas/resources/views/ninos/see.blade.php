@extends('layouts.main-landing')

@section('header')


<form action="{{ url('/ninos/')}}" method="post">

@csrf


@include('ninos.form',['modo'=>'Consultar']);



</form>

@endsection
