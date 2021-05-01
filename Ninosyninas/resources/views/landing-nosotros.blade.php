@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")


@section('mainContent')
<div class='upper-half'>

<div class="container-fluid">
<br>
<br>
<div class="container">
    <div class="container">
        <div class="container bg-light zelda rounded text-center">
            
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <a href="{{url('/nosotros-areas')}}" class=" center" > <h3> Areas de atención</h3></a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a href="{{url('/nosotros-logros')}}" class =" center" ><h3> Logros</h3></a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a href="{{url('/nosotros-ayuda')}}" class =" center"><h3> Ayuda</h3></a>
                    </div>
                </div>
            
            
        </div>
    </div>
</div>
    <br>
    <br>
    <br>
    <br>
    <div class="text-justyfy center">
        <p>{{$textos["aNosotros"]}}</p>
    </div>
    <img class="center" src="{{url('img/29.png')}}">
    <br>
    <br>
    <hgroup class="text-center">
        <h1>Patronato</h1>
    </hgroup>
    <br>
    <br>
    </div>
    <div class='bottom-half'>
    <div class="container-fluid lower-half">
        <div class="container position-relative " style="width: 60%">
            <div class="grid-3 text-center row ">
                <div class="card col-sm-12 col-md-4">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">Presidente</h5>
                        <p>{{$textos["nombre1"]}}</p>
                        <br>
                        <p class="card-text">{{$textos["patronato1"]}}</p>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">Vicepresidente</h5>
                        <p>{{$textos["nombre2"]}}</p>
                        <br>
                        <p class="card-text">{{$textos["patronato2"]}}</p>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">Tesorero</h5>
                        <p>{{$textos["nombre3"]}}</p>
                        <br>
                        <p class="card-text">{{$textos["patronato3"]}}</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="container position-relative" style="width: 60%">
            <div class="grid-3 text-center row">
                <div class="card col-sm-12 col-md-4">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">Vocal</h5>
                        <p>{{$textos["nombre1"]}}</p>
                        <br>
                        <p class="card-text">{{$textos["patronato1"]}}</p>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">Vocal</h5>
                        <p>{{$textos["nombre2"]}}</p>
                        <br>
                        <p class="card-text">{{$textos["patronato2"]}}</p>
                    </div>
                </div>
                <div class="card col-sm-12 col-md-4">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <h5 class="card-title">Vocal</h5>
                        <p>{{$textos["nombre3"]}}</p>
                        <br>
                        <p class="card-text">{{$textos["patronato3"]}}</p>
                    </div>
                </div>
            </div>
        </div>

        
</div>
<br>
<br>

</div>

@endsection