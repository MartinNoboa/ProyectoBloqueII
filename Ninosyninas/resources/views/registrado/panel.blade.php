@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='upper-half'> 
<br>
<br>
<h1 class='text-center'>¡Bienvenid@!</h1>
<br>
<br>
@endsection

@section('mainContent')
    <div class="container">
    <div class="row">
    <div class="col-12 col-md-4" >
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center ">
            <a type="button"  href="{{url('/usuario')}}" class="btn"><i class="fas fa-user fa-6x pb-3 titulo"></i></a>
            <h3>Usarios</h3>
            <h5>Usuarios con una sesión activa en el panel administrativo</h5>
        </div>
        </div>
    </div>
    <br>        
    <div class="col-12 col-md-4 ">
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center">
            <a type="button"  href="{{url('/usuario')}}" class="btn"><i class="fas fa-child fa-6x pb-3 titulo"></i></a>
            <h3>Niños</h3>
            <h5>Niños son parte de Niños y Niñas de México</h5>
        </div>
        </div>
    </div>
    <br>
    <div class="col-12 col-md-4">
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center">
            <a type="button"  href="{{url('/calendario')}}" class="btn"><i class="fas fa-calendar-alt fa-6x pb-3 titulo"></i></a>
            <h3>Calendario</h3>
            <h5>Eventos que hubo o habrá en Niños y Niñas de México</h5>
        </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    



    <div class="row">
    <div class="col-12 col-md-4" >
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center ">
            <a type="button"  href="{{url('/noticias')}}" class="btn"><i class="fas fa-newspaper fa-6x pb-3 titulo"></i></a>
            <h3>Noticias</h3>
            <h5>Noticias más relevantes que se muestran en el sitio web</h5>
        </div>
        </div>
    </div>
    <br>       
    <div class="col-12 col-md-4 ">
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center">
            <a type="button"  href="{{url('/usuario')}}" class="btn"><i class="fas fa-spinner fa-6x pb-3 titulo"></i></a>
            <h3>Progreso</h3>
            <h5>Avance que ha tenido un niño desde que ingresó </h5>
        </div>
        </div>
    </div>
    <br>
    <div class="col-12 col-md-4">
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center">
           <a type="button"  href="{{url('/donadores')}}" class="btn"><i class="fas fa-donate fa-6x pb-3 titulo"></i></a>
            <h3>Donadores</h3>
            <h5>Donadores registrados en Niños y Niñas de México</h5>
        </div>
        </div>
    </div>
    </div>
    <br>
    <br>

    <div class="row">
    <div class="col-12 col-md-4" >
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center ">
            <a type="button"  href="{{url('/usuario')}}" class="btn"><i class="fas fa-images fa-6x pb-3 titulo"></i></a>
            <h3>Galeria</h3>
            <h5>Colección de imagenes que se deaean mostrar en la pagina web</h5>
        </div>
        </div>
    </div>
    <br>       
    <div class="col-12 col-md-4 ">
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center">
            <a type="button"  href="{{url('/usuario')}}" class="btn"><i class="fas fa-tasks  fa-6x pb-3 titulo"></i></a>
            <h3>Reportes</h3>
            <h5>Reportar cual es el esatus que tiene actualmente un niño</h5>
        </div>
        </div>
    </div>
    <div class="col-12 col-md-4 ">
        <div class="card w-100 h-100 shadow">
        <div class="card-body text-center">
            <a type="button"  href="{{url('/usuario')}}" class="btn"><i class="fas fa-edit  fa-6x pb-3 titulo"></i></a>
            <h3>Editar Página web</h3>
            <h5>Modificar el contenido deseado de la págian web</h5>
        </div>
        </div>
    </div>

</div>
<br>
<br>
<br>







@endsection