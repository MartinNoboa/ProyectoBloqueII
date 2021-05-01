@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('main')
<table class="table table-striped">
        <br><br>
        <h1>Desaprobados</h1>
        <br>
        <thead class="thead-light">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Aprobado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
            <tr scope="row">
            
                <td>{{ $noticia->titulo }}</td>
                <td>{{ $noticia->contenido }}</td>
                
            </tr>
            @endforeach

           
    <!-- segunda tabla para aprobados-->
        

           
        </tbody>
    </table>
@endsection