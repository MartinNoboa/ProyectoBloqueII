@extends('layouts.main-landing')
@section('mainContent')
<div class='bottom-half'>
<div class='container'><a class="btn btn-outline-primary p-20 m-20" href="{{url('/noticias')}}">Regresar a noticias</a></div>
    <div class="d-flex align-items-center justify-content-center flex-column ">
    <div class="w-50 bg-light container my-2 shadow-sm   mb-5 bg-body rounded p-0">
        <img src="{{asset($noticia->image->url)}}" alt="" srcset="" class="img-fluid">
        <article class="p-3">
            <h1 class="fs-2 my-3 d-flex align-items-center justify-content-center">{{$noticia->titulo}}</h1>
            <hr>
            <p class="text-justify">{{$noticia->contenido}}</p>
        </article>
    </div>
</div>
</div>
@endsection
