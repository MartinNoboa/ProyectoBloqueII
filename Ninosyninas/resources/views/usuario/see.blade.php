@extends('layouts.main-landing')

@section('header')


<form action="{{ url('/usuario/.$usuario->id')}}" method="post">

@csrf
@include('usuario.form',['modo'=>'Consultar']);


</form>

@endsection
