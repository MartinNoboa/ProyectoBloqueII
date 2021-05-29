@extends('layouts.main-landing')
@section('mainContent')
<div class='pt-3'>
<div class='container background'>
    <div class="d-flex justify-content-start mx-3">
        <a href="{{url('/noticias')}}" class="pt-3">
            <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                <i class="bi bi-arrow-left"></i>
            </button>
        </a>
    </div></div>
    <div class="d-flex align-items-center justify-content-center flex-column ">
    <div class="responsive-container bg-light container my-2 shadow-sm mb-5 bg-body rounded p-0">
        <img src="{{asset($noticia->image->url)}}" alt="" srcset="" class="center img-fluid ">
        <article class="p-3">
            <h1 class="fs-2 my-3 d-flex align-items-center justify-content-center">{{$noticia->titulo}}</h1>
            <hr>
            <p class="text-justify">{{$noticia->contenido}}</p>
        </article>
    </div>
</div>
</div>
@endsection
