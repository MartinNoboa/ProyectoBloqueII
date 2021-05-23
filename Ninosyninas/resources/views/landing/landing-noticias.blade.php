@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='background'> 
<br>
<br>
<hgroup class="text-center">
    <h1 class='text-center titulo font-title-title'>Noticias</h1>
    <h4 class="font-title">Ve nuestras más recientes noticias</h4>
</hgroup>
@endsection

@section('mainContent')
<div class="container center">
    <div class="row">
        @foreach($noticias as $noticia)
        <div class="col-sm-6">
            <div class="card noticia m-2" style="width: 25rem;">
                <img src="{{asset($noticia->image->url)}}" class="card-img-top" alt="Imagen de la noticia">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$noticia -> titulo}}</h5>
                    <p class="card-text">{{$noticia -> cuerpo}}</p>
                    <a href="{{url('/noticia/ver/'.$noticia->id) }}" class="btn btn-primary" alt="enlace a noticia">Ver Noticia Completa</a>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>
@endsection