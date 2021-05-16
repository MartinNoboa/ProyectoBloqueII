@extends('layouts.main-landing')

@section('header')



<form action="{{ url('/reporte/'.$reporte->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('reporte.form',['modo'=>'Editar']);

</form>


@endsection
