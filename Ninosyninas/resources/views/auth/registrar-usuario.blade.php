@extends('layouts.main-landing')
@section('register')
    <div class="d-flex align-items-center justify-content-center flex-column">
       <div class="p-4 w-50 bg-light container border border-dark rounded my-5">
           <form action="{{route('register')}}" method="POST">
                @csrf
                    <div class="mb-3 form-group form-outline px-4">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Ingresa el nombre" class="form-control">
                    </div>
                    <div class="mb-3 form-group form-outline px-4">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Ingresa el Apellido" class="form-control">
                    </div>
                    <div class="mb-3 form-group form-outline px-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" placeholder="Ingresa el Email" class="form-control">
                    </div>
                    <div class="mb-3 form-group form-outline px-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Ingresa la contraseña" class="form-control">
                    </div>
                    <div class="mb-3 form-group form-outline px-4">
                        <label for="password_confirmation" class="form-label">Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite la contraseña" class="form-control">
                    </div>
                    <div class="px-4">
                        <input type="submit" class="btn btn-primary w-100 mt-4">
                    </div>

            </form>
       </div>
    </div>
@endsection
