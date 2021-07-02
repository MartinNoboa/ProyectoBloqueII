@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')

<div class="container">
    @if(Session::has('mensaje'))
    <!--<div class="alert alert-success alert-dismissible" role="alert">-->
    <div class="alert alert-success alert-dismissible" role="alert">


        {{ Session::get('mensaje')}}

        <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="btn pull-right">&times;</span>
        </button>
    </div>
</div>
@endif
</div>

<div class="container">
            
                <div class="bg-white container mt-5 bg-white shadow-sm p-3 mb-5 bg-body rounded" id="table-usr">


                <h3 class="text-center mb-3">Donadores </h3>
                <div class="d-flex justify-content-start my-3">
                    <a href="{{url('/panel')}}">
                        <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                    </a>
                </div>

                <div class="d-flex justify-content-between align-items-center border-bottom">
                    <div class="me-auto p-2">
                        <h1 class="text-left fs-4">Lista de Donadores Registrados </h3>
                    </div>
                    <div class="p-2">

                        <a href="{{url('donadores/create')}}" class="btn btn-success ">
                            <button type="button" class="btn btn-success m-0 p-0 d-flex justify-content-center align-items-center">
                                <span class="material-icons-outlined">
                                    add_circle
                                </span>
                            </button>
                        </a>

                        <input  type="text" class="search-box" name="search-user" id="search"
                            autocomplete="off">
                        <label for="search-box" title="Buscar">
                            <span class="material-icons-outlined search-icon">
                                search
                            </span>
                        </label>

                    </div>
                </div>


                @if ($desaprobados->count())
                <table class="table table-hover px-3 ">

                    <h3 class="pt-5"><strong>Desaprobados</strong></h3>
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">email</th>
                            <th scope="col">Telefono</th>

                        </tr>
                    </thead>
                    <tbody id = "desaprobados">
                    @include('donadores.data.desaprobados')

                        

                        <!-- segunda tabla para aprobados-->

                    </tbody>
                </table>
                @else
                <div class="empty-space">
                    <h2 class="my-3 text-center pt-5">
                        No hay donadores disponibles 
                    </h2>
                </div>
                @endif

                <div class="container">
                    <!-- -->{{ $desaprobados->onEachSide(5)->links() }}

                </div>


                @if ($aprobados->count())
                <table class="table table-hover px-3">

                    <h3 class="my-4"><strong>Aprobados</strong></h3>
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">email</th>
                            <th scope="col">Telefono</th>

                        </tr>
                    </thead>
                    <tbody id = "aprobados">
                       @include('donadores.data.aprobados')
                    </tbody>
                </table>
                @else
                <div class="empty-space">
                    <h2 class="my-3 text-center pt-5">
                        No hay donadores disponibles 
                    </h2>
                </div>
                @endif
                </div>

                <div class="container">
                {{ $aprobados->onEachSide(5)->links() }}
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
        recuperarDonadoresAprobados(page);
        recuperarDonadoresNoAprobados(page);
        });

        $('#search').on('keyup', function() {
            $value = $(this).val();
            recuperarDonadoresAprobados(1);
            recuperarDonadoresNoAprobados(1);
        });

        function recuperarDonadoresNoAprobados(page) {
        //
            var search = $('#search').val();
            $.ajax({
            type: "GET",
            data: {
                'search_query':search,
            },
            url: "{{route('desaprobados')}}",
            success:function(data) {
                $('#desaprobados').html(data);
            }
            });
        }

        function recuperarDonadoresAprobados(page) {
            var search = $('#search').val();
            console.log("Aprobados query: " + search);

            $.ajax({
            type: "GET",
            data: {
                'search_query':search,
            },
            url: "{{ route('aprobados') }}",
            success:function(data) {
                $('#aprobados').html(data);
            }
            });
        }
    });
</script>
@endpush
