@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='background'>

<div class="container mb-5">
<br>
<br>
    <div class="container">
        <div class="container">
            <div class="container bg-light zelda rounded text-center ancho ">
                
                    <div class="row ">
                        <div class="col-sm-12 col-md-4">
                            <a href="{{url('/nosotros-areas')}}" class=" center" > <h5> Areas de atención</h5></a>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <a href="{{url('/nosotros-logros')}}" class =" center" ><h5> Logros</h5></a>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <a href="{{url('/nosotros-ayuda')}}" class =" center"><h5> Ayuda</h5></a>
                        </div>
                    </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('mainContent')
<div class="background cont">
            
    <div class="container">
    <h1 class="text-center titulo-rojo font-title-title">¿Qué necesitamos?</h1>
    <div class="row">
        <div class="col-4">
            <div class="container">
                <br>
                <h3 class="text-center titulo-azul font-title">Donativo</h3>
                <br>
                <?php
                            $string= $txt[5]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo ' <h5 data-aos="fade-up">'.$string1.' <h5>' ?>
                <br>
                
            </div>
        </div>
        <div class="col-8 text-center">
            <br>
            <br>
                <img src="{{url('img/25.jpeg')}}"  width="80%">
            <br>
        </div>

    </div>
    
    <br>
    <br>
    <div class="row">
        <div class="col-4">
        <div class="container text-center">
                <br>
                <h3 class="text-center titulo-verde font-title">En especie</h3>
                <br>
                <br>
                <?php
                            $string= $txt[11]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo ' <h5>'.$string1.' <h5>' ?>
                <br>
                
            </div>
        </div>
        <div class="col-4 text-center">
        <div class="container">
                <br>
                <h3 class="text-center titulo font-title">¿Cómo donar?</h3>
                <br>
                <br>
                <h5 class= 'text-center'>El funcionamiento de Niños y Niñas de México A.C. no sería posible sin nuestros benefactores. Queremos 
                    agradecer su apoyo a todas aquellas personas que han hecho posible nuestro sueño.</h5>
                <br>
                <h5>Súmate a nuestra causa:</h5>
                <br>
                <a class="btn button-donar" href="{{ url('donaciones')}}" role="button">Donar</a>
                
            </div>
        </div>
        <div class="col-4 text-center">
        <div class="container">
        <br>
                <h3 class="text-center titulo-rosa font-title">Voluntariado y Servicio Social</h3>
                <br>
                <?php
                            $string= $txt[6]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo ' <h5>'.$string1.' <h5>' ?>
            

        </div>
        </div>
    </div>

</div>
<br>
<br>
<br>

@endsection