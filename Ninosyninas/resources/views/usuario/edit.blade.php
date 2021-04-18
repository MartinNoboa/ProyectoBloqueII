formulario de edición de empleado

@extends('layouts.main-landing')

@section('header')



<form action="{{ url('/usuario/'.$usuario->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('usuario.form',['modo'=>'Editar']);

</form>


@endsection
