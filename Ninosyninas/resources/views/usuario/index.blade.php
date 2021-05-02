@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">
    <div class="d-flex border-bottom mb-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de Usuarios Registrados</h3>
        </div>
        <div class="align-self-center p-2">
            <a href="{{url('/registrar-usuario')}}" class="btn btn-success mw-25">Registrar</a>
        </div>
        <div class="align-self-center p-2">
            <input id="search-box" type="text" class="search-box" name="search-user" id="search-user" autocomplete="off" >
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
                    <th class="text-wrap" scope="col">Apellido Paterno</th>
                    <th class="text-wrap" scope="col">Apellido Materno</th>
                    <th class="text-wrap" scope="col">Fecha Nacimiento</th>
                    <th class="text-wrap" scope="col">Fecha Contratación</th>
                    <th class="text-wrap" scope="col">Ocupacion</th>
                    <th class="text-wrap" scope="col">Telefono</th>
                    <th class="text-wrap" scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr scope="row">
                    <td class="fs-6 text-wrap">{{ $user->nombre}}</td>
                    <td class="fs-6 text-wrap">{{ $user->apellido_paterno}}</td>
                    <td class="fs-6 text-wrap">{{ $user->apellido_materno}}</td>
                    <td class="fs-6 text-wrap">{{ $user->fecha_nacimiento}}</td>
                    <td class="fs-6 text-wrap">{{ $user->fecha_inicio}}</td>
                    <td class="fs-6 text-wrap">{{ $user->ocupacion}}</td>
                    <td class="fs-6 text-wrap">{{ $user->telefono}}</td>
                    <td class="fs-6 text-wrap">{{ $user->mail}}</td>
                    <td>

                        <a href="{{ url('/usuario/'.$user->id.'/edit') }}">


                            <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </a>

                        <form action="{{ url('/usuario/'.$user->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}

                            <button type="submit" class="btn btn-danger my-1 d-flex justify-content-center align-items-center"
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
    $document.on('keyup','#search-user',function(){
        let query = $(this).val();
        fetch_custumer_data(query);
    });
});
</script> -->


@endsection
