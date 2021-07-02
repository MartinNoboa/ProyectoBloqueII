@extends('layouts.main-landing')
@section('content')
@if(Session::has('mensaje'))
<div class="container">
    <!--<div class="alert alert-success alert-dismissible" role="alert">-->
    <div class="alert alert-success alert-dismissible" role="alert">


        {{ Session::get('mensaje')}}

        <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="btn pull-right">&times;</span>
        </button>
    </div>
</div>
@endif

<div class="bg-white container my-5 p-3 bg-white shadow-sm  bg-body rounded">


    <h3 class="text-center my-3">Noticias </h3>
    <div class="d-flex justify-content-start my-3">
        <a href="{{url('/panel')}}">
            <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                <i class="bi bi-arrow-left"></i>
            </button>
        </a>
    </div>



    <div class="d-flex justify-content-between align-items-center border-bottom">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de noticias registradas </h3>
        </div>
        <div class="p-2">

            <a href="{{url('/noticias/registrar-noticia')}}" class="btn btn-success ">
                <button type="button" class="btn btn-success m-0 p-0 d-flex justify-content-center align-items-center">
                    <span class="material-icons-outlined">
                        add_circle
                    </span>
                </button>
            </a>

        </div>
    </div>



    @if ($news->count())
    @foreach ($news as $newsItem)
    <div class="d-flex align-items-center justify-content-center flex-column border-bottom">
        <div class="ms-auto p-2 dropdown-img my-3">
            <span class="material-icons-outlined">
                more_vert
            </span>
            <div class="dropdown-content-img">
                <a href="{{url('/noticias/view/'.$newsItem->id) }}">Ver</a>
                <a href="{{url('/noticias/edit/'.$newsItem->id)}}">Editar</a>
                <form action="" method="post">
                    <a data-toggle="modal" data-target="#exampleModal" >Borrar</a>
                </form>
                
            </div>
        </div>
        <div class="cnt mb-5">
            <img src="{{asset($newsItem->image->url)}} " alt="no se encontró la imagen" srcset="" class="img">
            <p class="overlay-text">{{$newsItem->titulo}} </p>
        </div>

        <!-- Modal eliminar-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                                        
                                        <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                    $url= '/noticias/delete/';
                                    ?>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn button-donar" onclick="location.href='{{url($url.$newsItem->id)}}'">Eliminar</button>
                                    </div>
                                </div>
                            </div>
            </div>



    </div>

    @endforeach
    @else
    <div class="empty-space">
        <h2 class="my-3 text-center pt-5">
            No hay noticias disponibles 
        </h2>
    </div>
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
