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

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">
        <h3 class="text-center mb-3">Áreas de atención </h3>
            
    <div class="align-self-center p-2">
        <a href="{{url('/contenido')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
    </div>
    <div class="table-responsive">
            <div class="table-responsive">

        
            <br>
        <div class="d-flex border-bottom mb-3">
            <div class="me-auto p-2">
                <h1 class="text-left fs-4">Lista de áreas de atención</h3>
            </div>
            <div class="align-self-center p-2">
            <a href="{{url('atencion/registrar-nuevo')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
            <br>
        </div>
    </div>
    

    <table class="table table-hover px-3 " >
        
        @if ($atencion->count())
        <br>
        <thead >
            <tr>
                <th scope="col">Contenido</th>
                <th scope="col">id</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach($atencion as $aten)
                <tr scope="row">
                    <td>{{ $aten->contenido}}</td>
                    <td>{{ $aten->id}}</td>      
                    <td>
                        <form action="{{ url('/atencion/'.$aten->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" 
                                value="Borrar" ><i class="bi bi-trash"></i> </button>
                                <!-- Modal desaprobados-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                                                <p>{{$aten->id}}</p>
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
                <h2>No hay áreas de atención disponibles</h2>
    @endif

</div>

</div>
</div>



@endsection