@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='upper-half'> 
<br>
<br>
<hgroup class="text-center">
    <h1 class='text-center titulo'>Noticias</h1>
    <h4>Ve nuestras más recientes noticias</h4>
</hgroup>
@endsection

@section('mainContent')
<p>Aqui iran todas las noticias.</p>
<div class="container center">
    <div class="row">
        @foreach($noticia as $id => $noticia)
        <br>
        <x-card-noticia :titulo="$noticia['titulo']" :cuerpo="$noticia['cuerpo']" :foto="$noticia['foto']" :id="$noticia['id']"/>
        <br>
        <br>
        @endforeach
    </div>
</div>
@endsection