@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')

<div class="container" >
    @if(Session::has('mensaje'))
    <!--<div class="alert alert-success alert-dismissible" role="alert">-->
    <div class="alert alert-success alert-dismissible" role="alert">
                
                
                {{ Session::get('mensaje')}}
                
                <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="btn pull-right" >&times;</span>
                </button>
                </div>
    </div>
    @endif
</div>

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">


    <h3 class="text-center mb-3">Donadores </h3>
    <div class="align-self-center p-2">
        <a href="{{url('/panel')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
        </div>
    <div class="table-responsive">

   
     <br>

  
     <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de donadores Registrados </h3>
        </div>
        <div class="align-self-center p-2">
        <a href="{{url('donadores/create')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
        <br>
        </div>

        <div class="align-self-center p-2">
            <input id="search-box" type="text" class="search-box" name="search-user" id="search-user" autocomplete="off" >
            {{-- data-href="{{URL::to('/usuarios.search')}}" --}}
            <label for="search-box" title="Buscar"><span class="material-icons-outlined search-icon">
                search
                </span></label>
            
        </div>
       
    </div>


    <table class="table table-hover px-3 " >
        
        <h3 class="pt-5"><strong>Desaprobados</strong></h3>
        <br>
        <thead >
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">email</th>
                <th scope="col">Telefono</th>
                
            </tr>
        </thead>
        <tbody>
        @if ($desaprobados->count())
            @foreach($desaprobados as $donador)
            <tr scope="row">
            
                <td>{{ $donador->nombre }}</td>
                <td>{{ $donador->apellido_paterno }}</td>
                <td>{{ $donador->apellido_materno }}</td>
                <td>{{ $donador->email }}</td>
                <td>{{ $donador->telefono }}</td>            
                <td>
                <a href="{{ url('/donadores/'.$donador->id.'/show') }}">
                
                            <button type="button" class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                <i class="far fa-eye"></i>
                            </button>      
                </a>
                <a href="{{ url('/donadores/'.$donador->id.'/edit') }}">
                
                              <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>      
                </a>
                

                <form action="{{ url('/donadores/'.$donador->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}

                <!--<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>-->

                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" 

                    value="Borrar"><i class="bi bi-trash"></i>
                                
                    </button>

                    <!-- Modal desaprobados-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn button-donar">Eliminar</button>


                             
                        </div>
                        </div>
                    </div>
                    </div>
                
                </form>

                </td>
            </tr>

            @endforeach
            @else
                <h2>No hay donadores disponibles</h2>
            @endif
           
    <!-- segunda tabla para aprobados-->
         
        </tbody>
    </table>

    <div class="container">
        <!-- -->{{ $desaprobados->onEachSide(5)->links() }}

    </div>
    

    <table class="table table-hover px-3">
        <br><br>
        <h3 class="pb-4"><strong>Aprobados</strong></h3>
        
        <thead >
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">email</th>
                <th scope="col">Telefono</th>
          
            </tr>
        </thead>
        <tbody>
        @if ($aprobados->count())
            @foreach($aprobados as $donador)
            <tr scope="row">
            
                <td>{{ $donador->nombre }}</td>
                <td>{{ $donador->apellido_paterno }}</td>
                <td>{{ $donador->apellido_materno }}</td>
                <td>{{ $donador->email }}</td>
                <td>{{ $donador->telefono }}</td>
                
              
                
                <td>
                <a href="{{ url('/donadores/'.$donador->id.'/show') }}">
                
                            <button type="button" class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                <i class="far fa-eye"></i>
                            </button>      
                </a>
                <a href="{{ url('/donadores/'.$donador->id.'/edit') }}">
                
                              <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>      
                </a>

                

                <form action="{{ url('/donadores/'.$donador->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}

                

                <!--<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>-->


                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" 

                    value="Borrar"><i class="bi bi-trash"></i>
                                
                    </button>

                   <!-- Modal desaprobados-->
                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn button-donar">Eliminar</button>


                             
                        </div>
                        </div>
                    </div>
                    </div>
                
                </form>

                </td>
            </tr>
            @endforeach
            @else
                <h2>No hay donadores disponibles</h2>
            @endif
          
        </tbody>
    </table>
        
    </div>

    <div class="container">
        {{ $aprobados->onEachSide(5)->links() }}
    </div>
</div>
</div>


@endsection