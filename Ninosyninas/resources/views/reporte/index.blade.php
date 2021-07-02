@extends('layouts.main-landing')

@section('pageTitle', "NNM - Reportes")

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

<div class="bg-white container my-5 p-3 bg-white shadow-sm  bg-body rounded">
    <h3 class="text-center my-3">Reportes</h3>
    
    <div class="d-flex justify-content-start my-3">
        <a href="{{url('/panel')}}">
            <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                <i class="bi bi-arrow-left"></i>
            </button>
        </a>
    </div>

    <div class="table-responsive">
        <div class="table-responsive">
            <br>

            <div class="d-flex justify-content-between align-items-center border-bottom">
                <div class="me-auto p-2">
                    <h1 class="text-left fs-4">Lista de reportes</h3>
                </div>
                <div class="p-2">

                    <a href="{{url('reporte/create')}}" class="btn btn-success ">
                        <button type="button"
                            class="btn btn-success m-0 p-0 d-flex justify-content-center align-items-center">
                            <span class="material-icons-outlined">
                                add_circle
                            </span>
                        </button>
                    </a>

                </div>
            </div>


            @if ($reportes->count())
            <table class="table table-hover px-3 ">

                <thead>
                    <tr>
                        <th scope="col">Nombre del niño</th>
                        <th scope="col">Quién reporta</th>
                        <th scope="col">Área</th>
                        <th scope="col">Calificación</th>
                        <th scope="col">Documento de drive</th>


                    </tr>
                </thead>
                <tbody>

                    @foreach($reportes as $item)
                    <tr scope="row">
                        @php
                        $nombreUsuario= App\Models\users::find($item->users_id);
                        $nombreNino = App\Models\Children::find($item->child_id);
                        $nombreArea = App\Models\areas::find($item->area_id);
                        @endphp
                        <td class="text-center">{{$nombreNino['nombreCompleto']}}</td>
                        <td class="text-center">{{$nombreUsuario['nombreCompleto']}}</td>
                        <td class="text-center">{{$nombreArea['nombreCompleto']}}</td>
                        <td class="text-center">{{ $item->calificacion }}</td>
                        <td class="text-center">@if($item->enlace == '') @else<a href="{{ $item->enlace }}"
                                target="_blank"><button type="button"
                                    class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-file-earmark"></i>
                                </button> </a>@endif</td>




                        <td>
                            <a href="{{ url('/reporte/'.$item->id.'/show') }}">

                                <button type="button"
                                    class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                    <i class="far fa-eye"></i>
                                </button>
                            </a>
                            <a href="{{ url('/reporte/'.$item->id.'/edit') }}">

                                <button type="button"
                                    class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </a>



                            <form action="{{ url('/reporte/'.$item->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE')}}



                                <!--<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>-->


                                <button type="button" data-toggle="modal" data-target="#exampleModal"
                                    class="btn btn-danger my-1 d-flex justify-content-center align-items-center"
                                    value="Borrar"><i class="bi bi-trash"></i>

                                </button>

                                <!-- Modal reportes-->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de
                                                    eliminar?</h5>
                                                <button type="button" class="btn" data-dismiss="modal"
                                                    aria-label="Close">
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
            <div class="empty-space">
                <h2 class="my-5 text-center">
                    No hay reportes disponibles
                </h2>
            </div>
            @endif
            <div class="container">
                {{ $reportes->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
