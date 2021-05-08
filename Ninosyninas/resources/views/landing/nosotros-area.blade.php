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
        <div class="row mb-5">
            <div class="col-4">
                <div class="container text-center">
                    <div class="container ">
                        <br>
                        <h3>Áreas de atención</h3>
                        <br>
                        <p>Atendemos a 130 niños, niñas y adolescentes de 4 a 18 años con programas de Educación, Salud, Alimentación 
                        y capacitación.</p>
                        <br>
                        <table class='content-table'>
                            @foreach($areas as $id => $areas)
                                <tr>
                                    <td>{{$areas}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-8 text-center">
                <br>
                <br>
                <img src="{{url('img/17.jpg')}}" width="80%">
                <br>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-4">
                <div class="container text-center">
                        <h3>Programa de Desarrollo Institucional Objetivo</h3>
                        <br>
                        <p>Promover el desarrollo y la sustentabilidad institucional.</p>
                </div>
            </div>
            <div class="col-8 text-center">
                <img src="{{url('img/16.jpg')}}" width="80%">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-4">
                <div class="container text-center">
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
                <br>
            </div>
        </div>
        <br>
        <br>
    </div>



</div>

</div>

@endsection