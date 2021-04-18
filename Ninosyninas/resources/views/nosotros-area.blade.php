@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class="container-fluid">
<br>
<br>
    <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="text-center table-wt zelda">
                <tr>
                    <th><a href="{{url('/nosotros-areas')}}">Areas de atención</a></th><th><a href="{{url('/nosotros-logros')}}">Logros</a></th><th><a href="{{url('/nosotros-ayuda')}}">Ayudar</a></th>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection
@section('mainContent')
<div class=" bottom-half">
<div class="row">
    <div class="col-4">
        <div class="container">
            <br>
            <h3 class="text-center">Áreas de atención</h3>
            <br>
            <p>Atendemos a 130 niños, niñas y adolescentes de 4 a 18 años con programas de Educación, Salud, Alimentación 
            y capacitación.</p>
            <br>
            
        </div>
    </div>
    <div class="col-8 text-center">
        <br>
        <br>
            <img src="{{url('img/17.jpg')}}" width="80%">
        <br>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="container center">
            <br>
            <table class='content-table'>
            @foreach($areas as $id => $areas)
                <tr>
                    <td>{{$areas}}</td>
                </tr>
            @endforeach
            </table>
            <br>
            
        </div>
    </div>
    <div class="col-8 text-center">
        <br>
        <br>
            <img src="{{url('img/13.jpg')}}"  width="80%">
        <br>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="container">
            <br>
            <h3 class="text-center">Programa de Desarrollo Institucional Objetivo</h3>
            <br>
            <p>Promover el desarrollo y la sustentabilidad institucional.</p>
            <br>
            
        </div>
    </div>
    <div class="col-8 text-center">
        <br>
        <br>
            <img src="{{url('img/16.png')}}"  width="80%">
        <br>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="container center">
            <br>
            <h3 class="text-center">Programa de educación</h3>
            <br>
            <p>Apoya y fortalece el acceso a alguna modalidad educativa, motiva el interés tanto de los niños como de 
                los padres por la escuela, a fin de lograr su incorporación y permanencia en la misma.</p>
            <br>
            <table class='content-table'>
            @foreach($programas as $id => $programas)
                <tr>
                    <td>{{$programas}}</td>
                </tr>
            @endforeach
            </table>
            <br>
            
        </div>
    </div>
    <div class="col-8 text-center">
        <br>
        <br>
            <img src="{{url('img/30.jpg')}}"  width="80%">
        <br>
    </div>
</div>
</div>
@endsection