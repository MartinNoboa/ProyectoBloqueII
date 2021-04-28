@extends('layouts.main-landing')
@section('content')
<div class="container p-3 bg-danger">
    <h1 class="mt-2 mb-5">Noticias</h1>
    <a href="{{url('/noticias/registrar-noticia')}} ">Registrar una nueva noticia</a>
    <div class="">
        {{-- <a href=""> --}}
            <img src="{{asset('storage/img/imgNews2.jpg')}} " alt="prueba" srcset="">
            <p>Titulo</p>
        {{-- </a> --}}

    </div>
</div>
@endsection
