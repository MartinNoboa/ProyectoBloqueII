@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='upper-half'> 
<br>
<br>
<h1 class='text-center'>¡Ponte en contacto con nosotros!</h1>
<br>
<br>
@endsection

@section('mainContent')
<div class='table-wt center'>
    <br>
    <br>
    @if($errors ->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
        @endforeach
    @endif

    <form method="POST" action= "{{ url('landing-contacto') }}">
        @csrf
        <label for='nombre'>Nombre</label><br>
        <input placeholder='Juan Perez Rodríguez' id='nombre' name="nombre" class='form-input text-center' value= "{{old('nombre')}}" required  >
        <br>
        <br>
        <label for='email'>Email</label><br>
        <input placeholder='ejemplo@correo.com' type='email' id='email' name='email' class='form-input text-center' value= "{{old('email')}}" required>
        <br>
        <br>
        <label for='tema'>Tema</label><br>
        <input placeholder='Tema' id='tema' name='tema' class='form-input text-center' value= "{{old('tema')}}"required>
        <label for='mensaje'>Mensaje</label><br>
        <input placeholder='Escriba su mensaje aqui' id='mensaje' name='mensaje' class='form-input text-center' style='height:300px' value= "{{old('mensaje')}}" required>
        <br>
        <br>
        <button type="submit" class="center btn btn-primary">Contáctanos</button>
        <br>
    </form>
    
</div>
<br>
<br>
</div>
<div class="bottom-half">
    <img src="{{url('img/fondo1.jpg')}}" alt="home photo" class="center">
    <table class='center'>
        <tr><th><h3>¡LLámanos!</h3></th><th></th><th>+52 442 182 7987</th></tr>
        <tr><th><h3>¡Visítanos!</h3></th><th></th><th></th></tr>
    </table>
    <div class='center'>
        <p>Calle Francisco González de Cosío 110, Plaza de las Americas, 76050 Santiago de Querétaro, Qro., México</p>
        <br>
        <p>e-mail: ninosyninasdemexico@yahoo.com</p>
    </div>
</div>
@endsection