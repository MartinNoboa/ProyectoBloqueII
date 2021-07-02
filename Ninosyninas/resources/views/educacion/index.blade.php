@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')

<div class="container" >
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

<div class="container">

    <div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">
            <h3 class="text-center mb-3">Programa de educación </h3>
                
        <div class="align-self-center p-2">
            <a href="{{url('/contenido')}}"> 
                    <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                                    <i class="bi bi-arrow-left"></i>
                    </button>
            </a>
            <br>
        </div>
        <div class="table-responsive">
                <div class="table-responsive">

            
                <br>
            <div class="d-flex border-bottom mb-3">
                <div class="me-auto p-2">
                    <h1 class="text-left fs-4">Lista de los programas de educación</h3>
                </div>
                <div class="align-self-center p-2">
                <a href="{{url('educacion/registrar-nuevo')}}"  class="btn btn-success "> 
                    <button type="button" class="btn btn-success m-0 p-0 d-flex justify-content-center align-items-center">
                                <span class="material-icons-outlined">
                                    add_circle
                                </span>
                    </button>
                </a>
                <br>
            </div>
        </div>
        

        <table class="table table-hover px-3 " >
            
            @if ($educacion->count())
            <br>
            <thead >
                <tr>
                    <th scope="col">Contenido</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($educacion as $edu)
                <tr scope="row">
                
                    <td>{{ $edu->contenido}}</td>          
                    <td class="d-flex justify-content-end">
                    <form action="{{ url('/educacion/eliminar/'.$edu->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE')}}
                    <button type="button" data-toggle="modal" data-target="#exampleModal{{$edu->id}}" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" 

                        value="Borrar" ><i class="bi bi-trash"  ></i>
                        
                        </button>

                        <!-- Modal desaprobados-->
                        <div class="modal fade" id="exampleModal{{$edu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn button-donar">Eliminar</button>                             
                            </div>
                            </div>
                        </div>
                        </div>
                    
                    </form>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        @else
            <h2 class="text-center pt-5">No hay áreas de atención disponibles</h2>
        @endif

    </div>

    </div>
    </div>


</div>



@endsection