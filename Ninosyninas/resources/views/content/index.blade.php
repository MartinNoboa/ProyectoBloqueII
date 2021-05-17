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
        <h3 class="text-center mb-3">Editar contenido de pag web </h3>
            
    <div class="align-self-center p-2">
        <a href="{{url('/panel')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
    </div>
    <!--- Inicio -->
    <div class="container">
        <table class="table table-hover px-3 " >
            <h3 class="pt-5"><strong>Inicio</strong></h3>
            <br>
            <thead >
                <tr>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row ">
                    <td>Acerca de nosotros</td>
                    <td class="pull-right">      
                    <a href="{{ url('/contenido/edit/1') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
                <tr scope="row ">
                    <td>Misión</td>
                    <td class="pull-right">      
                    <a href="{{ url('/contenido/edit/2') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
                <tr scope="row ">
                    <td>Visión</td>
                    <td class="pull-right">      
                    <a href="{{ url('/contenido/edit/3') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
            
            </tbody>
        </table>
    </div>



    <!--- Nosotros -->
    <div class="container">
        <table class="table table-hover px-3 " >
            <h3 class="pt-5"><strong>Nosotros</strong></h3>
            <br>
            <thead >
                <tr>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row ">
                    <td>Acerca de nosotros</td>
                    <td class="pull-right">      
                    <a href="{{ url('contenido/edit/4') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
                <tr scope="row ">
                    <td>Logros</td>
                    <td class="pull-right">      
                    <a href="{{ url('contenido/edit/5') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
                <tr scope="row ">
                    <td>¿Qué necesitamos?</td>
                    <td class="pull-right">      
                    <a href="{{ url('contenido/edit/6') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
                <tr scope="row ">
                    <td>Voluntariado</td>
                    <td class="pull-right">      
                    <a href="{{ url('contenido/edit/7') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--- Donaciones -->
    <div class="container">
        <table class="table table-hover px-3 " >
            <h3 class="pt-5"><strong>Donaciones</strong></h3>
            <br>
            <thead >
                <tr>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row " >
                    <td>Donar</td>
                    <td class="text-left">      
                    <a href="{{ url('contenido/edit/9') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    
    
     <!--- Contactanos -->
     <div class="container">
        <table class="table table-hover px-3 " >
            <h3 class="pt-5"><strong>Contáctanos</strong></h3>
            <br>
            <thead >
                <tr>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr scope="row ">
                    <td>Contacto</td>
                    <td class="pull-right">      
                    <a href="{{ url('contenido/edit/8') }}">
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                        <i class="bi bi-pencil-square"></i>
                    </button>      
                    </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


 
    

</div>


@endsection