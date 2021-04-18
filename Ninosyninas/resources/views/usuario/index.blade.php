

@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')

<div class="container mt-5">
        <h3 class="text-center mb-3">Usuarios Registrados</h3>
    <div class="table-responsive">

    <div class="class="col-md-">
     
        <a href="{{url('usuario/create')}}"  class="btn btn-success">Registrar nuevo usuario</a>


        
        <!-- Modal -->
        <div class="modal fade" id="usuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          

            <form id="UsuarioForm">
                            <div class="modal-body">
                            {{ csrf_field()}}

                                <div class="form-group">
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" class="form-control" id="Nombre" /> 
                                </div>

                            <div class="form-group">
                                    <label for="ApellidoPaterno">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="ApellidoPaterno" /> 
                                </div>
    
                                <div class="form-group">
                                    <label for="ApellidoMaterno">Apellido Materno</label>
                                    <input type="text" class="form-control" id="ApellidoMaterno" /> 
                                </div>

                                <div class="form-group">
                                    <label for="Telefono">Telefono</label>
                                    <input type="text" class="form-control" id="Telefono" /> 
                                </div>

                                <div class="form-group">
                                    <label for="FechaContratacion">Fecha de Contratacion</label>
                                    <input type="date" class="form-control" id="FechaContratacion" /> 
                                </div>

                                <div class="form-group">
                                    <label for="FechaNacimiento">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="FechaNacimiento" /> 
                                </div>
                            
                            
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" /> 
                                </div>

                            
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save data</button>
            </div>
            </div>
        </div>
        </div>


 

    <div class="container">
    
        <div class="jumbotron">
          <div class="row">
              
              <h1>Laravel crud</h1>
              
            
          </div>
        </div>
    </div>


     </div>
<!--
     <div class="class="col-md-">

     <a href="{{url('usuario/forms/create')}}"  class="btn btn-success">Registrar nuevo usuario</a>

     
     

  </div>
    -->

    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha Contratación</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Email</th>

            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr scope="row">
                <td >{{ $usuario->id }}</td>
                <td>{{ $usuario->Nombre }}</td>
                <td>{{ $usuario->ApellidoMaterno }}</td>
                <td>{{ $usuario->ApellidoPaterno }}</td>
                <td>{{ $usuario->Telefono }}</td>
                <td>{{ $usuario->FechaContratacion}}</td>
                <td>{{ $usuario->FechaNacimiento }}</td>
                <td>{{ $usuario->Email }}</td>
                <td>
                
                <a href="{{ url('/usuario/'.$usuario->id.'/edit') }}">
                
                    
                        <button type="button" class="btn btn-success">Editar</button>         
                </a>

                <form action="{{ url('/usuario/'.$usuario->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}

                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>
                
                </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>



@endsection