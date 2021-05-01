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
                <a class="nav-link" href="#">Calendario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Noticias</a>
            </li>
        </ul>

    </div> <img src="{{asset('img/user.jpg')}}" class="img-fluid" alt="cuadro responsive" width="100">
</nav>
@endsection
@section('header')
<div class='upper-half'>  
    <img src="{{url('img/16.jpg')}}" alt="home photo" class="center" width="100">
    <br>
    <br>
    <div class="container">
        <div class="center">
            <div class="grid-3 center">
                <div class="card text-center">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">{{$textos["cardt1"]}}</h5>
                        <br>
                        <p class="card-text">{{$textos["card1"]}}</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">{{$textos["cardt2"]}}</h5>
                        <br>
                        <p class="card-text">{{$textos["card2"]}}</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <span class="material-icons" style="font-size: 70px">
                            sports_soccer
                        </span>
                        <br>
                        <br>
                        <h5 class="card-title">{{$textos["cardt3"]}}</h5>
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
    <div class="bottom-half">
        <div class="text-center center">
            <h1>Acerca de nosotros</h1>
            <br>
            <p>{{$textos["aNosotros"]}}</p>
            <a class="btn btn-outline-primary" href="{{ url('/nosotros')}}" role="button">Conoce más</a>
            <br>
            <br>
        </div>
        <br>
        <div class="grid-2">
            <div class="text-center">
                <h2>Misión</h2>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                    class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                </svg>
            </div>

            <div class="text-center">
                <br>
                <p>{{$textos["Mision"]}}</p>
            </div>
        </div>
        <div class="grid-2">
            <div class="text-center">
                <br>
                <p>{{$textos["Vision"]}}
            </div>
            <div class="text-center">
                <h3>Visión</h3>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                </svg>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="position-relative">
            <div class="position-absolute top-50 start-50 translate-middle">
                <table class="text-center">
                    <tr>
                        <th>
                            <h1>Noticias recientes</h1>
                        </th>
                        <th>
                            <a class="btn btn-outline-primary" href="{{ url('/noticias')}}" role="button">Ver más</a>
                        </th>
                    </tr>
                </table>
            </div>
            <br>
            <br>
        </div>

        <br>
        <br>
    </div>
@endsection
