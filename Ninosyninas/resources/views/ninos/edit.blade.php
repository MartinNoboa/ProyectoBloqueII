@extends('layouts.main-landing')

@section('header')



<form action="{{ url('/ninos/'.$ninos->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('ninos.form',['modo'=>'Editar']);

</form>


@endsection
