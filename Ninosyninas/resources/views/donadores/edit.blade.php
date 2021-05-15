@extends('layouts.main-landing')

@section('header')



<form action="{{ url('/donadores/'.$donadores->id) }}" method="post">

    @csrf 
    {{ method_field('PATCH')}}
    @include('donadores.form',['modo'=>'Editar']);

</form>


@endsection
