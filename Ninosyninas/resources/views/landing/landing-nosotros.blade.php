@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")


@section('mainContent')
<div class='background cont' >

<div class="container-fluid">
<br>
<br>
    <div class="container ">
        <div class="container">
            <div class="container shadow bg-light zelda rounded text-center ancho ">
                    
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
    <br>
    <br>
    <br>
    <br>

    
    <div class="text-center center">
        <h1 class='titulo-azul font-title-title'>¿Quiénes somos?</h1>
        <br>
        <br>
            <?php
                            $string= $txt[3]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
            <?php echo ' <h5 data-aos="zoom-in">'.$string1.' <h5>' ?>
    </div>
    <br>
    <br>
    <img class="center" src="{{url('img/29.png')}}">
    <br>
    <br>
    
</div>
<br>
<br>

</div>

@endsection