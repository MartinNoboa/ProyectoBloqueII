@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')





<div class='background'>
    <img src="{{url('img/38.jpg')}}" alt="home photo" class="img-fluid img-home">
    <div class="container mt-5">
        <div class="">
            <div class="grid-3 center">
                <div class="card text-center rounded shadow " data-aos="flip-left">
                    <div class="card-body  rounded ">
                        <br>
                        <img src="{{url('img/34.jpg')}}" width="90%" height="40%">
                        <br>
                        <br>
                        <br>
                        <h5 class="card-title text-center titulo-rosa font-card">{{$textos["cardt1"]}}</h5>
                        <br>
                        <br>
                        <p class="card-text text-center ">{{$textos["card1"]}}</p>
                    </div>
                </div>
                <div class="card text-center shadow" data-aos="flip-up">
                    <div class="card-body">
                        <br>
                        <img src="{{url('img/35.jpg')}}" width="70%" height="40%">
                        <br>
                        <br>
                        <br>
                        <h5 class="card-title titulo-rojo font-card">{{$textos["cardt2"]}}</h5>
                        <br>
                        <br>
                        <p class="card-text">{{$textos["card2"]}}</p>
                    </div>
                </div>
                <div class="card text-center " data-aos="flip-right">
                    <div class="card-body shadow" width="100" height="70">
                        <br>
                        <img src="{{url('img/36.png')}}" width="70%" height="40%">
                        <br>
                        <br>
                        <br>
                        <h5 class="card-title titulo-verde font-card">{{$textos["cardt3"]}}</h5>
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


<div class="wrapper pt-5">
    
    <div class="text-center center">
        <h1 class='titulo-azul font-title-title'>Acerca de nosotros</h1>
        <br>
        <h5 data-aos="fade-down">{{$txt[0]['contenido']}}</h5>
        <br>
        <a class="btn btn-primary" href="{{ url('/nosotros')}}" role="button">Conoce más</a>
        <br>
        <br>
    </div>




    <div class="grid-2 my-5">
        <div class="text-center">
            <h2 class='titulo-rosa font-title-title'>Misión </h2>

            <i class="far fa-clipboard fa-4x titulo-rosa"></i>
            <br>
            <br>

            <?php
                            $string= $txt[1]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
            <?php echo ' <h5 data-aos="fade-right">'.$string1.'</h5>' ?>

        </div>
        <div class="text-center">
            <img src="{{url('img/30.jpg')}}" width="70%" height="80%">
        </div>
    </div>
    <div class="grid-2 my-5">
        <div class="text-center">
            <img src="{{url('img/14.jpg')}}" width="80%" height="90%">
        </div>
        <div class="text-center">
            <h2 class='titulo-verde font-title-title'>Visión</h2>
            <i class="far fa-eye fa-4x titulo-verde"></i>
            <?php
                            $string= $txt[2]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
            <?php echo ' <h5 data-aos="fade-left">'.$string1.' <h5>' ?>
        </div>
    </div>
    
    <div class="position-relative p-30 my-5">
        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="text-center">
                <tr>
                    <th>
                        <h1 class='titulo font-title-title'>Noticias recientes</h1>
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
