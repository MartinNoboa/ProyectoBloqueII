@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class="container-fluid bottom-half">
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
<div class="grid-2">
    <div>
        <h3 class="text-center">Logros</h3>
        <p>{{$logro}}</p>
    </div>
    <div>
        <img src="{{url('img/fondo1.jpg')}}">
    </div>

</div>
@endsection