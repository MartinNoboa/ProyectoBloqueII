@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='upper-half'>

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
<div class="bottom-half">
    <div class="container">
        <h1 class="text-center titulo-verde">Logros</h1>
        <div class="grid-2 text-center ">
            <div>
                <?php
                            $string= $txt[4]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo $string1 ?>
            </div>
            <div class="text-center">
                <img src="{{url('img/23.png')}}" width="80%">
            </div>

        </div>

    </div>
</div>


@endsection