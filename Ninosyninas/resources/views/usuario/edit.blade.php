@extends('layouts.main-landing')
@section('form')

<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
        <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center">Editar Usuario</h1>
        <hr>
        <form action="{{url('/usuario/'.$v_user->id.'/edit')}}" method="POST">
            @csrf
            {{ method_field('patch')}}
            <div class="mb-3 form-group form-outline px-4">
                <label for="name" class="form-label fs-5 px-0">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Ingresa el Nombre" class="form-control @error('name') border border-danger @enderror" value="{{old('name')??$v_user->nombre}}">
                @error('name')
                        <div class="text-danger my-2 fs-6">
                            {{$message}}
                        </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_paterno" class="form-label fs-5 px-0">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Ingresa el Apellido Paterno"
                    class="form-control @error('apellido_paterno') border border-danger @enderror" value="{{old('apellido_paterno')??$v_user->apellido_paterno}}">
                @error('apellido_paterno')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_materno" class="form-label fs-5 px-0">Apellido Materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Ingresa el Apellido Materno"
                    class="form-control @error('apellido_materno') border border-danger @enderror" value="{{old('apellido_materno')??$v_user->apellido_materno}}">
                @error('apellido_materno')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="ocupacion" class="form-label fs-5 px-0">Ocupacion</label>
                <input type="text" name="ocupacion" id="ocupacion" placeholder="Ingresa la ocupación"
                    class="form-control @error('ocupacion') border border-danger @enderror" value="{{old('ocupacion')??$v_user->ocupacion}}">
                @error('ocupacion')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="phone" class="form-label fs-5 px-0">Telefono</label>
                <input type="tel" name="phone" id="phone" placeholder="Ingresa el telefono" class="form-control @error('phone') border border-danger @enderror" value="{{old('phone')??$v_user->telefono}}">
                @error('phone')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="birthday" class="form-label fs-5 px-0">Fecha de Nacimiento</label>
                <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') border border-danger @enderror" 
                    value="{{old('birthday')??$v_user->fecha_nacimiento}}">
                @error('birthday')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="contratacion" class="form-label fs-5 px-0">Fecha de Contratacion</label>
                <input type="date" name="contratacion" id="contratacion" class="form-control @error('contratacion') border border-danger @enderror" value="{{old('contratacion')??$v_user->fecha_inicio}}">
                @error('contratacion')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
        
            <div class="mb-3 form-group form-outline px-4">
                <label for="email" class="form-label fs-5 px-0">Email</label>
                <input type="text" name="email" id="email" placeholder="Ingresa el Email" class="form-control @error('email') border border-danger @enderror" value="{{old('email')??$v_user->mail}}">
                @error('email')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="px-4">
                <input type="submit" class="btn btn-primary w-100 mt-4">
            </div>
            <div class="px-4">
                <a href="{{route('lista_usuarios')}}" class="btn bg-danger w-100 mt-4 text-white">Cancel</a>
            </div>

        </form>
    </div>
</div>
@endsection
