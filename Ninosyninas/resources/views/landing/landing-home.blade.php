@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/landing')}}"> <img src="{{asset('img/logo.png')}}" class="img-fluid"
            alt="cuadro responsive" width="100"> </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{url('/nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('/contactanos')}}">Contáctanos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Galería</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/calendario')}}">Calendario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Noticias</a>
            </li>
        </ul>

    </div> <img src="{{asset('img/user.jpg')}}" class="img-fluid largo" alt="cuadro responsive" width="100" >
</nav>
@endsection
@section('header')





<div class=''>  
    <img src="{{url('img/16.jpg')}}" alt="home photo" class="img-fluid">
    <div class="container mt-5">
        <div class="">
            <div class="grid-3 center">
                <div class="card text-center rounded shadow">
                    <div class="card-body  rounded">
                        
                        <br>
                        <br>
                        <h5 class="card-title text-center titulo-rosa">{{$textos["cardt1"]}}</h5>
                        <br>
                        <p class="card-text text-center">{{$textos["card1"]}}</p>
                    </div>
                </div>
                <div class="card text-center shadow">
                    <div class="card-body">
                        
                        <br>
                        <br>
                        <h5 class="card-title titulo-rojo">{{$textos["cardt2"]}}</h5>
                        <br>
                        <p class="card-text">{{$textos["card2"]}}</p>
                    </div>
                </div>
                <div class="card text-center ">
                    <div class="card-body shadow" width="100" height="70">
                        
                        <br>
                        <br>
                        <h5 class="card-title titulo-verde">{{$textos["cardt3"]}}</h5>
                        <br>
                        <p class="card-text">{{$textos["card3"]}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('mainContent')
<br>
<br>
<br>

    <div class="">
        <div class="text-center center">
            <h1 class='titulo-azul'>Acerca de nosotros</h1>
            <br>
            <p>{{$txt[0]['contenido']}}</p>
            <a class="btn btn-primary" href="{{ url('/nosotros')}}" role="button">Conoce más</a>
            <br>
            <br>
        </div>
        <br>
        <div class="">

        </div>



        <div class="grid-2">
            <div class="text-center">
                <h2 class='titulo-rosa'>Misión  </h2>
                
                <i class="far fa-clipboard fa-4x titulo-rosa"></i>
                <br>
                <br>
                <?php
                            $string= $txt[1]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo $string1 ?>
               
            </div>

            <div class="text-center">
                
            </div>
        </div>
        <div class="grid-2">
            <div class="text-center">
                <br>
                
            </div>
            <div class="text-center">
                <h2 class='titulo-rojo'>Visión</h2>
                <br>
                <i class="far fa-eye fa-4x titulo-rojo"></i>
                <br>
                <br>
                <?php
                            $string= $txt[2]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo $string1 ?>
                <br>
            </div>
        </div>
        <br>
        <div class="position-relative p-30">
            <div class="position-absolute top-50 start-50 translate-middle">
                <table class="text-center">
                    <tr>
                        <th>
                            <h1 class='titulo'>Noticias recientes</h1>
                        </th>
                        <th>
                            <a class="btn button-donar" href="{{ url('/noticias')}}" role="button">Ver más</a>
                        </th>
                    </tr>
                </table>
            </div>
            <br>
            <br>
        </div>

        <br>
        <br>
        <br>
    </div>
@endsection
