@extends('layouts.main-landing')
@section('content')
<div class="container p-3 bg-white">
    <h1 class="mt-2 mb-5">Noticias</h1>
    <div class="col-md-12 mb-4">
        <a a href="{{url('/noticias/registrar-noticia')}} " type="button" class="btn btn-success"><i class="bi bi-plus pe-2" aria-hidden="true"></i>Agregar Noticia</a>
    </div>
    <hr>
    @if ($news->count())
        @foreach ($news as $newsItem)
        <div class="d-flex align-items-center justify-content-center flex-column border-bottom">
            <div class="ms-auto p-2 dropdown-img">
                <span class="material-icons-outlined">
                    more_vert
                </span>
                <div class="dropdown-content-img">
                    <a href="{{url('/noticias/edit/'.$newsItem->id)}}">Editar</a>
                    <a href="{{url('/noticias/delete/'.$newsItem->id) }}">Borrar</a>
                    
                    {{-- <form action="{{ url('/noticias/delete'.$newsItem->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" value="Borrar">
                    </form> --}}
                </div>
            </div>
            <div class="cnt mb-5">
                <img src="{{asset($newsItem->image->url)}} " alt="no se encontró la imagen" srcset="" class="img">
                <p class="overlay-text">{{$newsItem->titulo}} </p>
            </div>
        </div>
        @endforeach
    @else
        <h2>No hay noticias disponibles</h2>
    @endif

    {{-- <div class="d-flex align-items-center justify-content-center flex-column m-3 border-bottom">
        <div class="ms-auto p-2 dropdown-img">
            <span class="material-icons-outlined">
                more_vert
            </span>
            <div class="dropdown-content-img">
                <a href="{{url('/')}}" class="">Editar</a>
                <a href="{{url('/')}}" class="">Borrar</a>
            </div>
        </div>
        <div class="cnt my-5">
            <img src="{{asset('storage/img/imgNews2.jpg')}} " alt="prueba" srcset="" class="img">
            <p class="overlay-text">Titulo</p>
        </div>

    </div> --}}
</div>
@endsection
