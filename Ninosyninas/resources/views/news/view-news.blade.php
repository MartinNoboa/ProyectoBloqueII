@extends('layouts.main-landing')
@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-start my-3">
        <a href="{{url('/home/noticias')}}">
            <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                <i class="bi bi-arrow-left"></i>
            </button>
        </a>
    </div>
    <div class="d-flex align-items-center justify-content-center flex-column ">

        <div class="w-50 bg-light container my-2 shadow-sm  mb-5 bg-body rounded p-0">
            <img src="{{asset($news->image->url)}}" alt="" srcset="" class="img-fluid">
            <article class="p-3">
                <h1 class="fs-2 my-3 d-flex align-items-center justify-content-center">{{$news->titulo}}</h1>
                <hr>
                <p class="text-justify">{{$news->contenido}}</p>
            </article>
        </div>
    </div>
</div>
@endsection
