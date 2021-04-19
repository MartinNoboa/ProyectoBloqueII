@extends('layouts.main-landing')
@section('register')
<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container border border-dark rounded my-5">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-3 form-group form-outline px-4">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Ingresa el Nombre" class="form-control @error('name') border border-danger @enderror" value="{{old('name')}}">
                @error('name')
                        <div class="text-danger my-2">
                            {{$message}}
                        </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Ingresa el Apellido Paterno"
                    class="form-control @error('apellido_paterno') border border-danger @enderror" value="{{old('apellido_paterno')}}">
                @error('apellido_paterno')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Ingresa el Apellido Materno"
                    class="form-control @error('apellido_materno') border border-danger @enderror" value="{{old('apellido_materno')}}">
                @error('apellido_materno')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="ocupacion" class="form-label">Ocupacion</label>
                <input type="text" name="ocupacion" id="ocupacion" placeholder="Ingresa la ocupación"
                    class="form-control @error('ocupacion') border border-danger @enderror" value="{{old('ocupacion')}}">
                @error('ocupacion')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="phone" class="form-label">Telefono</label>
                <input type="tel" name="phone" id="phone" placeholder="Ingresa el telefono" class="form-control @error('phone') border border-danger @enderror" value="{{old('phone')}}">
                @error('phone')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="birthday">Fecha de Nacimiento</label>
                <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') border border-danger @enderror" 
                    value="{{old('birthday')}}">
                @error('birthday')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="contratacion">Fecha de Contratacion</label>
                <input type="date" name="contratacion" id="contratacion" class="form-control @error('contratacion') border border-danger @enderror" value="{{old('contratacion')}}">
                @error('contratacion')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
                </div>
        
            <div class="mb-3 form-group form-outline px-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" placeholder="Ingresa el Email" class="form-control @error('email') border border-danger @enderror" value="{{old('email')}}">
                @error('email')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingresa la contraseña"
                    class="form-control @error('password') border border-danger @enderror">
                @error('password')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="password_confirmation" class="form-label">Repite tu Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Repite la contraseña" class="form-control @error('password_confirmation') border border-danger @enderror">
                @error('password_confirmation')
                    <div class="text-danger my-2">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="px-4">
                <input type="submit" class="btn btn-primary w-100 mt-4">
            </div>

        </form>
    </div>
</div>
@endsection
