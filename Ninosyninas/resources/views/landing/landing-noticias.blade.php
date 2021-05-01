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
<div class="container center">
    <div class="row text-center">
        @foreach($noticias as $noticia)

        <div class="card noticia" style="width: 18rem;">
            <img src="{{ url('img/noticias/' . $noticia -> image_id . '.jpg') }}" class="card-img-top" alt="Imagen de la noticia">
            <div class="card-body text-center">
                <h5 class="card-title">{{$noticia -> titulo}}</h5>
                <p class="card-text">{{$noticia -> cuerpo}}</p>
                <a href="#" class="btn btn-primary" alt="enlace a noticia">Ver Noticia Completa</a>
            </div>
        </div>

        <x-../card-noticia :titulo="{{ $noticia->titulo }}" :cuerpo="{{ $noticia->contenido }}" :foto="{{ $noticia->image_id }}" :id="{{ $noticia->id }}"/>
        
 
        @endforeach
    </div>
    
</div>
@endsection