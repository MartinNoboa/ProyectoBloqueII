@extends('layouts.main-landing')
@section('content')

<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 responsive-container bg-light container my-2 shadow p-3 mb-5 bg-body rounded">
        <h1 class="fs-2 my-3 d-flex align-items-center justify-content-center">Publicar imagen en galería</h1>
        <hr>
        <form action="{{url('/panel/galeria/publicar-imagen')}} " method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="mb-3 form-group form-outline px-4">
                <label for="titulo" class="form-label fs-4 px-0">Título</label>
                <input type="text"  name="titulo" id="titulo" placeholder="Ingresa el Titulo de tu imagen" class="form-control @error('titulo') border border-danger @enderror" value="{{old('titulo')}}">
                @error('titulo')
                        <div class="text-danger my-2 fs-6">
                            {{$message}}
                        </div>
                @enderror
            </div> --}}
            <div class="mb-3 form-group form-outline px-4">
                <label evento" class="form-label fs-4 px-0">Evento</label>
                <input type="text"  name="evento" id="evento" placeholder="Ingresa el evento de tu imagen" class="form-control @error('evento') border border-danger @enderror" value="{{old('evento')}}">
                @error('evento')
                        <div class="text-danger my-2 fs-6">
                            {{$message}}
                        </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <textarea name="comentario" id="comentario" class="form-control @error('comentario') border border-danger @enderror" rows="6" placeholder="Escribe aqui tus comentarios" >{{old('comentario')}}</textarea>
                @error('comentario')
                        <div class="text-danger my-2 fs-6">
                            {{$message}}
                        </div>
                @enderror
            </div>

            <div class="mb-3 form-group form-outline px-4">
                <input type="file" name="image" class="form-control">
                @error('image')
                        <div class="text-danger my-2 fs-6">
                            {{$message}}
                        </div>
                @enderror
            </div>


            <div class="px-4">
                <button type="submit" class="btn btn-primary w-100 mt-4">Publicar</button>
                
            </div>
            <div class="px-4">
                <a href="{{route('galeria-panel')}}" class="btn bg-danger w-100 mt-4 text-white">Cancel</a>
            </div>

        </form>
    </div>
</div>
@endsection
