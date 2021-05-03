@extends('layouts.main-landing')
@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <!--<div class="alert alert-success alert-dismissible" role="alert">-->
    <div class="alert alert-success alert-dismissible" role="alert">
                
                
                {{ Session::get('mensaje')}}
                
                <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="btn pull-right" >&times;</span>
                </button>
                </div>
    </div>
    @endif
</div>

<div class="container p-3 bg-white">


    <h3 class="text-center mb-3">Noticias </h3>
    <div class="align-self-center p-2">
        <a href="{{url('/home')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
        </div>
    <div class="table-responsive">


        <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de noticias Registrados </h3>
        </div>
        <div class="align-self-center p-2">
        <a href="{{url('/noticias/registrar-noticia')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
        <br>
        </div>

        <div class="align-self-center p-2">
            <input id="search-box" type="text" class="search-box" name="search-user" id="search-user" autocomplete="off" >
            {{-- data-href="{{URL::to('/usuarios.search')}}" --}}
            <label for="search-box" title="Buscar"><span class="material-icons-outlined search-icon">
                search
                </span></label>
            
        </div>
        </div>
    </div>


    @if ($news->count())
        @foreach ($news as $newsItem)
        <div class="d-flex align-items-center justify-content-center flex-column border-bottom">
            <div class="ms-auto p-2 dropdown-img">
                <span class="material-icons-outlined">
                    more_vert
                </span>
                <div class="dropdown-content-img">
                    <a href="{{url('/noticias/view/'.$newsItem->id) }}">Ver</a>
                    <a href="{{url('/noticias/edit/'.$newsItem->id)}}">Editar</a>
                    <a href="{{url('/noticias/delete/'.$newsItem->id) }}">Borrar</a>
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
