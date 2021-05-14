@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')

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

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">


    <h3 class="text-center mb-3">Reportes </h3>
    <div class="align-self-center p-2">
        <a href="{{url('/panel')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
        </div>
    <div class="table-responsive">

   
     <br>

  
     <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de reportes creados</h3>
        </div>
        <div class="align-self-center p-2">
        <a href="{{url('reporte/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
        <br>
        </div>
       
    </div>


    <table class="table table-hover px-3 " >
        
        <h3 class="pt-5"><strong>Reportes</strong></h3>
        <br>
        <thead >
            <tr>
                <th scope="col">Nombre del niño</th>
                <th scope="col">Apellido Paterno del niño</th>
                <th scope="col">Apellido Materno del niño</th>
                <th scope="col">Quien reporta</th>
                <th scope="col">Calificacion</th>
                
            </tr>
        </thead>
        
        </tbody>
    </table>
@endsection