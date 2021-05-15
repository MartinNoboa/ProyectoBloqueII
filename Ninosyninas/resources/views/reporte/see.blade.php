@extends('layouts.main-landing')

@section('header')



<form action="{{ url('/reporte/'.$item->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('reporte.form',['modo'=>'Consultar']);

</form>


@endsection