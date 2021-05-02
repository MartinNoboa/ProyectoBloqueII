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
                <label for="name" class="px-0">Nombre <span aria-hidden="true" class="required text-danger" >*</span> </label>
                <input type="text" name="name" id="name" placeholder="Ingresa el Nombre" class="form-control @error('name') border border-danger @enderror" value="{{old('name')??$v_user->nombre}}">
                @error('name')
                        <div class="text-danger my-2 fs-6">
                            {{$message}}
                        </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_paterno"  class="px-0">Apellido Paterno <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Ingresa el Apellido Paterno"
                    class="form-control @error('apellido_paterno') border border-danger @enderror" value="{{old('apellido_paterno')??$v_user->apellido_paterno}}">
                @error('apellido_paterno')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_materno" class="px-0">Apellido Materno <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Ingresa el Apellido Materno"
                    class="form-control @error('apellido_materno') border border-danger @enderror" value="{{old('apellido_materno')??$v_user->apellido_materno}}">
                @error('apellido_materno')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="ocupacion"  class="px-0">Ocupacion <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="text" name="ocupacion" id="ocupacion" placeholder="Ingresa la ocupación"
                    class="form-control @error('ocupacion') border border-danger @enderror" value="{{old('ocupacion')??$v_user->ocupacion}}">
                @error('ocupacion')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="phone" class="px-0">Telefono <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="tel" name="phone" id="phone" placeholder="Ingresa el telefono" class="form-control @error('phone') border border-danger @enderror" value="{{old('phone')??$v_user->telefono}}">
                @error('phone')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="birthday"  class="px-0">Fecha de Nacimiento <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') border border-danger @enderror" 
                    value="{{old('birthday')??$v_user->fecha_nacimiento}}">
                @error('birthday')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="contratacion"  class="px-0">Fecha de Contratación <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="date" name="contratacion" id="contratacion" class="form-control @error('contratacion') border border-danger @enderror" value="{{old('contratacion')??$v_user->fecha_inicio}}">
                @error('contratacion')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
        
            <div class="mb-3 form-group form-outline px-4">
                <label for="email"  class="px-0">Email <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="text" name="email" id="email" placeholder="Ingresa el Email" class="form-control @error('email') border border-danger @enderror" value="{{old('email')??$v_user->mail}}">
                @error('email')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3 form-group form-outline px-4">
                <label for="password"  class="px-0">Contraseña <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="password" name="password" id="password" placeholder="Ingresa la contraseña"
                    class="form-control @error('password') border border-danger @enderror">
                @error('password')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="password_confirmation" class="form-label fs-5" class="px-0">Repite la Contraseña <span aria-hidden="true" class="required text-danger" >*</span></label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Repite la contraseña" class="form-control @error('password_confirmation') border border-danger @enderror">
                @error('password_confirmation')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div> --}}
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
