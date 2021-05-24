@extends('layouts.main-landing')
@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <!--<div class="alert alert-success alert-dismissible" role="alert">-->
    <div class="alert alert-success alert-dismissible" role="alert">


        {{ Session::get('mensaje')}}

        <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="btn pull-right">&times;</span>
        </button>
    </div>
    @endif
</div>

<div class="bg-white container my-5 p-3 bg-white shadow-sm  bg-body rounded">


    <h1 class="text-center my-3">Galeria</h1>
    <div class="d-flex justify-content-start my-3">
        <a href="{{url('/panel')}}">
            <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                <i class="bi bi-arrow-left"></i>
            </button>
        </a>
    </div>



    <div class="d-flex justify-content-between align-items-center border-bottom">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Listado galeria </h1>
        </div>
        <div class="p-2">

            <a href="{{url('/panel/galeria/publicar-imagen')}}" class="btn btn-success ">
                <button type="button" class="btn btn-success m-0 p-0 d-flex justify-content-center align-items-center">
                    <span class="material-icons-outlined">
                        add_circle
                    </span>
                </button>
            </a>

            <input id="search-box" type="text" class="search-box" name="search-user" id="search-user"
                autocomplete="off">
            {{-- data-href="{{URL::to('/usuarios.search')}}" --}}
            <label for="search-box" title="Buscar">
                <span class="material-icons-outlined search-icon">
                    search
                </span>
            </label>

        </div>
    </div>



    @if ($galleries->count())
    @foreach ($galleries as $galleriesItem)
    <div class="d-flex align-items-center justify-content-center flex-column border-bottom">
        <div class="ms-auto p-2 dropdown-img my-3">
            <span class="material-icons-outlined">
                more_vert
            </span>
            <div class="dropdown-content-img">
                <form action="" method="post">
                    <a data-toggle="modal" data-target="#exampleModal" >Borrar</a>
                    </form>
            </div>
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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn button-donar" onclick="location.href='{{url('/panel/galeria/delete/'.$galleriesItem->id)}}'">Eliminar</button>
                                    </div>
                                </div>
                            </div>
            </div>



        <div class="cnt mb-5">
            <img src="{{asset($galleriesItem->image->url)}} " alt="no se encontró la imagen" srcset="" class="img">
            {{-- <p class="overlay-text">{{$galleriesItem->titulo}} </p> --}}
        </div>

        





    </div>
    @endforeach
    @else
    <div class="empty-space">
        <h2 class="my-3 text-center pt-5">
            No hay fotos en la disponibles galeria 
        </h2>
    </div>
    
    @endif
</div>
@endsection
