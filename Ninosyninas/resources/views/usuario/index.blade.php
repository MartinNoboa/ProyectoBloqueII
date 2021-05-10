@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class="container">
    @if(Session::has('mensaje'))
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
        <h3 class="text-center mb-3">Usuarios </h3>
            
    <div class="align-self-center p-2">
        <a href="{{url('/panel')}}"  class="btn btn-success "> <span class="material-icons-outlined">keyboard_backspace</span></a>
        <br>
        </div>
    <div class="table-responsive">
            <div class="table-responsive">

        
            <br>



    <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de Usuarios Registrados</h3>
        </div>
        <div class="align-self-center p-2">
        <a href="{{url('/registrar-usuario')}}"  class="btn btn-success "> <span class="material-icons-outlined">add_circle</span></a>
        <br>
        </div>
        <div class="align-self-center p-2">
            <input type="text" class="search-box" name="search-user" id="search-user" autocomplete="off" >
            {{-- data-href="{{URL::to('/usuarios.search')}}" --}}
            <label for="search-box" title="Buscar"><span class="material-icons-outlined search-icon">
                search
                </span></label>
            
        </div>
    </div>
    <div>
        <table class="table table-hover px-3">
            <thead>
                <tr>
                    <th class="text-wrap" scope="col">Nombre</th>
                    <!-- <th class="text-wrap" scope="col">Apellido Paterno</th>
                    <th class="text-wrap" scope="col">Apellido Materno</th> -->
                    <th class="text-wrap" scope="col">Fecha Nacimiento</th>
                    <th class="text-wrap" scope="col">Ocupacion</th>
                    <th class="text-wrap" scope="col">Telefono</th>
                    <th class="text-wrap" scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
            @if ($users->count())
                @foreach($users as $user)
                <tr scope="row">
                    <!-- <td class="fs-6 text-wrap">{{ $user->nombre}}</td>
                    <td class="fs-6 text-wrap">{{ $user->apellido_paterno}}</td>
                    <td class="fs-6 text-wrap">{{ $user->apellido_materno}}</td> -->
                    @php
                        $nombre= App\Models\users::find($user->id)
                    @endphp
                    <td class="fs-6 text-wrap">{{ $nombre['nombreCompleto'] }}</td>
                    <td class="fs-6 text-wrap">{{ $user->fecha_nacimiento}}</td>
                    <td class="fs-6 text-wrap">{{ $user->ocupacion}}</td>
                    <td class="fs-6 text-wrap">{{ $user->telefono}}</td>
                    <td class="fs-6 text-wrap">{{ $user->mail}}</td>
                    <td>
                    <a href="{{ url('/registrar-usuario/'.$user->id.'/see ') }}">
                        <button type="button" class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                    <i class="far fa-eye"></i>
                        </button>      
                    </a>

                        <a href="{{ url('/usuario/'.$user->id.'/edit') }}">
                            <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </a>
                <form action="{{ url('/usuario/'.$user->id) }}" method="post">
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
                    
                </tr>
                
               
                   
                    </td>
                    </form>
                @endforeach
                        @else
                        <div>
                        <h2>No hay usuarios disponibles</h2>
                        </div>
                    
                @endif
                
                
            </tbody>
            
        </table>
    </div>

</div>

</div>
</div>


@endsection

@push('scripts')
<!-- <script>
    script para poder usar busqueda ajax
    $(document).ready(function(){
    function fetchUsersData(query =''){
        fetch_custumer_data();
        $.ajax({
            url:{{route('UsuariosController.search')}},
            method:'GET',
            data:{query:query},
            dataType:'json'
            success:function(data){
                $('tbody').html(data.table_data);
               
            }
        })
    }
    $document.on('userup','#search-user',function(){
        let query = $(this).val();
        fetch_custumer_data(query);
    });
});
</script> -->
@endpush

