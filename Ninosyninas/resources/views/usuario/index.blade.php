

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
            <input type="text" class="search-box" name="search-user" id="search" autocomplete="off" >
            <!-- {{-- data-href="{{URL::to('/usuarios.search')}}" --}} -->
            <label for="search-box" title="Buscar"><span class="material-icons-outlined search-icon">
                search
                </span></label>
            
        </div>
    </div>
    <div>
        <table class="table table-hover px-3">
            <thead>
                <tr>
                    <th class="text-wrap" scope="col">Nombre Completo</th>
                    <th class="text-wrap" scope="col">Fecha Nacimiento</th>
                    <th class="text-wrap" scope="col">Ocupacion</th>
                    <th class="text-wrap" scope="col">Telefono</th>
                    <th class="text-wrap" scope="col">Email</th>
                </tr>
            </thead>
            <tbody id = "usuarios">
                @include('usuario.data.data_usuario')
            </tbody>
            
        </table>
    </div>

</div>

</div>
</div>


@endsection

@push('scripts')
<script>
    //script para poder usar busqueda ajax
    $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        recuperarUsuarios(page);
        });

        $('#search').on('keyup', function() {
            $value = $(this).val();
            recuperarUsuarios(1);
        });

        function recuperarUsuarios(page) {
        //
            var search = $('#search').val();
      
            $.ajax({
            type: "GET",
            data: {
                'search_query':search,
            },
            url: "{{ route('UsuariosController.search') }}",
            success:function(data) {
                $('#usuarios').html(data);
            }
            });
        }
    });
</script>
@endpush

