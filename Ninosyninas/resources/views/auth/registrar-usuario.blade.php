@extends('layouts.main-landing')
@section('register')
<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container border border-dark rounded my-5">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-3 form-group form-outline px-4">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Ingresa el Nombre" class="form-control">
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Ingresa el Apellido Paterno"
                    class="form-control">
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Ingresa el Apellido Materno"
                    class="form-control">
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="phone" class="form-label">Telefono</label>
                <input type="tel" name="phone" id="phone" placeholder="Ingresa el telefono" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="birthday">Fecha de Nacimiento</label>
                <input type="date" name="birthday" id="birthday" class="form-control" 
                    value="" >
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="contratacion">Fecha de Contratacion</label>
                <input type="date" name="contratacion" id="contratacion" class="form-control" 
                    value="" >
            </div>
        
            <div class="mb-3 form-group form-outline px-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" placeholder="Ingresa el Email" class="form-control">
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" placeholder="Ingresa la contraseña"
                    class="form-control">
            </div>
            <div class="mb-3 form-group form-outline px-4">
                <label for="password_confirmation" class="form-label">Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Repite la contraseña" class="form-control">
            </div>
            <div class="px-4">
                <input type="submit" class="btn btn-primary w-100 mt-4">
            </div>

        </form>
    </div>
</div>
@endsection
