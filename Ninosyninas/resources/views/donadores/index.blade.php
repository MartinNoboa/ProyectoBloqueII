@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')

<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
                
                
                {{ Session::get('mensaje')}}
                

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                
                </button>

    </div>
    @endif
</div>

<div class="container mt-5">

       

        <h3 class="text-center mb-3">Donadores </h3>
    <div class="table-responsive">



    <div class="class="col-md-">
     
        <a href="{{url('donadores/create')}}"  class="btn btn-success">Registrar nuevo donador</a>
       

    <div class="container">
    
        <div class="jumbotron">
          <div class="row">
              
          </div>
        </div>
    </div>
    <br>


     </div>
     <br>
<!--
     <div class="class="col-md-">

     <a href="{{url('usuario/forms/create')}}"  class="btn btn-success">Registrar nuevo usuario</a>

  </div>
    -->

    <table class="table table-striped">
        <br><br>
        <h1>Desaprobados</h1>
        <br>
        <thead class="thead-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Aprobado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($desaprobados as $donador)
            <tr scope="row">
            
                <td>{{ $donador->nombre }}</td>
                <td>{{ $donador->apellido_paterno }}</td>
                <td>{{ $donador->apellido_materno }}</td>
                <td>{{ $donador->email }}</td>
                <td>{{ $donador->telefono }}</td>
                <td>{{ $donador->aprobado }}</td>
              
                
                <td>
                
                <a href="{{ url('/donadores/'.$donador->id.'/edit') }}">
                
                              <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>      
                </a>

                

                <form action="{{ url('/donadores/'.$donador->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}

                <!--<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>-->

                <button type="submit" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" onclick="return confirm('¿Quieres borrar?')"

                value="Borrar"><i class="bi bi-trash"></i>
                            
                </button>
                
                </form>

                </td>
            </tr>
            @endforeach

           
    <!-- segunda tabla para aprobados-->
        

           
        </tbody>
    </table>

    <table class="table table-striped">
        <br><br>
        <h1>Aprobados</h1>
        <br><br>
        <thead class="thead-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Aprobado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aprobados as $donador)
            <tr scope="row">
            
                <td>{{ $donador->nombre }}</td>
                <td>{{ $donador->apellido_paterno }}</td>
                <td>{{ $donador->apellido_materno }}</td>
                <td>{{ $donador->email }}</td>
                <td>{{ $donador->telefono }}</td>
                <td>{{ $donador->aprobado }}</td>
              
                
                <td>
                
                <a href="{{ url('/donadores/'.$donador->id.'/edit') }}">
                
                              <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>      
                </a>

                

                <form action="{{ url('/donadores/'.$donador->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}

                <!--<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>-->

                <button type="submit" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" onclick="return confirm('¿Quieres borrar?')"

                value="Borrar"><i class="bi bi-trash"></i>
                            
                </button>
                
                </form>

                </td>
            </tr>
            @endforeach

          
        </tbody>
    </table>

    </div>
</div>





@endsection