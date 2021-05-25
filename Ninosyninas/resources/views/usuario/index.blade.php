@extends('layouts.main-landing')

@section('content')

@if(Session::has('mensaje'))
<div class="container">

    <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje')}}
        <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="btn pull-right">&times;</span>
        </button>
    </div>

</div>
@endif

<div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">
    <h3 class="text-center my-3">Usuarios</h3>
    <div class="d-flex justify-content-start my-3">
        <a href="{{url('/panel')}}">
            <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                <i class="bi bi-arrow-left"></i>
            </button>
        </a>
    </div>
    <div class="d-flex justify-content-between align-items-center border-bottom my-3">
        <div class="me-auto p-2">
            <h1 class="text-left fs-4">Lista de usuarios</h1>
        </div>
        <div class="p-2">

            <a href="{{url('usuario/create')}}" class="btn btn-success ">
                <button type="button" class="btn btn-success m-0 p-0 d-flex justify-content-center align-items-center">
                    <span class="material-icons-outlined">
                        add_circle
                    </span>
                </button>
            </a>

            <input type="text" class="search-box" name="search-user" id="search"
                autocomplete="off">
            <label for="search-box" title="Buscar">
                <span class="material-icons-outlined search-icon">
                    search
                </span>
            </label>

        </div>
    </div>
    
    @if ($users->count())
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

            @foreach($users as $item)
            <tr scope="row">
                @php
                $nombre= App\Models\users::find($item->id)
                @endphp
                <td class="fs-6 text-wrap">{{ $nombre['nombreCompleto'] }}</td>
                <td class="fs-6 text-wrap">{{ $item->fecha_nacimiento}}</td>
                <td class="fs-6 text-wrap">{{ $item->ocupacion}}</td>
                <td class="fs-6 text-wrap">{{ $item->telefono}}</td>
                <td class="fs-6 text-wrap">{{ $item->mail}}</td>



                <td>
                    <a href="{{ url('/usuario/'.$item->id.'/show ') }}">
                        <button type="button"
                            class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                            <i class="far fa-eye"></i>
                        </button>
                    </a>

                    <a href="{{ url('/usuario/'.$item->id.'/edit') }}">
                        <button type="button"
                            class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </a>

                    <form action="{{ url('/usuario/'.$item->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE')}}

                        <button type="button" data-toggle="modal" data-target="#exampleModal{{$item->id}}"
                            class="btn btn-danger my-1 d-flex justify-content-center align-items-center"
                            value="Borrar"><i class="bi bi-trash"></i>

                        </button>

                        <!-- Modal usuarios-->
                        <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                                        <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn button-donar">Eliminar</button>



                                    </div>
                                </div>

                            </div>
                        </div>


                    </form>

                </td>
            </tr>

            @endforeach


        </tbody>

    </table>
    @else
    <div>
        <h4 class="text-center my-3">No hay usuarios disponibles</h4>
    </div>
    @endif
</div>



@endsection

@push('scripts')
<script>
    //script para poder usar busqueda ajax
    $(document).ready(function () {
        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            recuperarUsuarios(page);
        });

        $('#search').on('keyup', function () {
            $value = $(this).val();
            recuperarUsuarios(1);
        });

        function recuperarUsuarios(page) {
            //
            var search = $('#search').val();
            console.log(search);
            $.ajax({
            type: "GET",
            data: {
                'search_query':search,
            },
            url: "{{ route('buscarUsuarios') }}",
            success:function(data) {
                $('#usuarios').html(data);
            }
            });
        }
    });

</script>
@endpush
