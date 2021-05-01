<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ url('css/landing.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    {{-- iconos de google --}}
    <link rel="stylesheet" href="{{ asset('css/material-icons.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    
    
    <!-- Prueba-->

    <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        


    
    
    <!-- Google Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Font awesome-->
    <script src="https://kit.fontawesome.com/76fa277871.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mx-3" href="{{url('/')}}"> <img src="{{asset('img/logo.png')}}" class="img-fluid"
            alt="cuadro responsive" width="150"> </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav">

            <li class="nav-item mx-2">
                <a class="nav-link " href="{{url('/nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Galería</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link " href="{{url('/contactanos')}}">Contáctanos</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{url('/noticias')}}">Noticias</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{url('/calendario')}}">Calendario</a>
            </li>
            <li class="nav-item mx-2">
                <a class="button-donar text-light nav-link btn-lg rounded" href="{{url('/donaciones')}}" role="button">Donar</a>
            </li>

        </ul>

    </div> 
    <!-- Revisar para poner iconos -->
    <span id = "loginIcon"><a id = "linkLogin" href = "{{ route('login') }}"><i class="fas fa-user fa-2x"></i></a></span>
    
</nav>
    @yield('form')
    @yield('header')
    @yield('login')
    @yield('content')

    <main class="containers-fluid">
        @yield('mainContent')
    </main>
    <div class="footer mw-100">
        <div class="row">
            <div class="col-8">
                <div class="container footer">
                    <br>
                    <h3>Aviso de privacidad</h3>
                    <br>
                    <p>Calle Francisco González de Cosío 110, Plaza de las Americas, 76050 Santiago de Querétaro, Qro.,
                    México</p>
                    <br>
                    <p>+52 442 182 7987</p>
                </div>
            </div>
            <div class="col-4 text-center">
                <br>
                <br>
                <a href="https://www.facebook.com/ninosyninasdemexicoqro" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-facebook"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <br>
            </div>
        </div>
    </div>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    @stack('scripts')

</html>
