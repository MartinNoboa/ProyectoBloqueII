@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('mainContent')
    <div class="container-fluid">
        <div class="container position-relative" style="width: 60%">
            <div class="grid-3 text-center ">
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">{{$textos["cardt1"]}}</h5>
                        <br>
                        <p class="card-text">{{$textos["card1"]}}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">{{$textos["cardt2"]}}</h5>
                        <br>
                        <p class="card-text">{{$textos["card2"]}}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">{{$textos["cardt3"]}}</h5>
                        <br>
                        <p class="card-text">{{$textos["card3"]}}</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="text-center">
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
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
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
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
            </div>
        </div>
        <br>
    </div>
    <br>
    <br>
    <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="text-center center">
                <tr>
                <th><h1>Noticias recientes</h1></th><th><a class="btn btn-outline-primary" href="{{ url('/nosotros')}}" role="button">Ver más</a></th>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <br>
    
@endsection