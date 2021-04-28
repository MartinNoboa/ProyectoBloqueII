@extends('layouts.main-landing')
@section('content')

<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container my-2 shadow p-3 mb-5 bg-body rounded">
        <h1 class="fs-2 my-3 d-flex align-items-center justify-content-center">Nueva Noticia</h1>
        <hr>
        <form action="{{route('upload-image')}} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 form-group form-outline px-4">
                <label for="titulo" class="form-label fs-4 px-0">Titulo</label>
                <input type="text"  name="titulo" id="titulo" placeholder="Ingresa el Titulo de la noticia" class="form-control @error('titulo') border border-danger @enderror" value="{{old('titulo')}}">
                @error('titulo')
                        <div class="text-danger my-2 fs-6">
                            {{$message}}
                        </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <textarea name="contenido" id="contenido" class="form-control @error('contenido') border border-danger @enderror" rows="6" placeholder="Escribe aqui tu noticia" value="{{old('contenido')}}"></textarea>
                @error('contenido')
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
                <a href="{{route('news')}}" class="btn bg-danger w-100 mt-4 text-white">Cancel</a>
            </div>

        </form>
    </div>
</div>
@endsection
