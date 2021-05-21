
    <!--- <h1>{{($modo)}} usuario</h1>

    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">

    <ul>
        @foreach($errors->all() as $error)
              <li>  {{($error)}} </li>
        @endforeach
    </ul>
        </div>    
    @endif



  
    --->

    <div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
    <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center"><h1>{{($modo)}} Usuario</h1></h1>
    <hr>
    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)

           <li> {{$error}}</li>

        @endforeach

        </ul>
        </div>

    @endif
        <div class="container mt">

        <div class="form-group">

            <label for="nombre" class="px-0">Nombre <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" placeholder="Ingresa el Nombre" class="form-control" name="nombre" value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}" id="nombre" value="{{old('nombre')}}"<?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
            <br>
        

        <label for="apellido_paterno" class="px-0">Apellido Paterno <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control" placeholder="Ingresa el Apellido Paterno" name="apellido_paterno" value="{{ isset($usuario->apellido_paterno)?$usuario->apellido_paterno:'' }}" id="apellido_paterno" value="{{old('apellido_paterno')}}" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        <br>

        <label for="apellido_materno" class="px-0">Apellido Materno <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control" placeholder="Ingresa el Apellido Materno" name="apellido_materno" value="{{ isset($usuario->apellido_materno)?$usuario->apellido_materno:'' }}"  id="apellido_materno" value="{{old('apellido_materno')}}"<?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        <br>

        

        <div class="mb-3 form-group form-outline ">
                <label for="ocupacion" class="form-label fs-5 px-0">Ocupacion<span aria-hidden="true" class="required text-danger">*</span></label>
                <input type="text" name="ocupacion" id="ocupacion" placeholder="Ingresa la ocupación"
                    class="form-control @error('ocupacion') border border-danger @enderror" value="{{old('ocupacion')}}">
                @error('ocupacion')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="mb-3 form-group form-outline">
                <label for="telefono" class="form-label fs-5 px-0">Telefono<span aria-hidden="true" class="required text-danger">*</span></label>
                <input type="tel" name="telefono" id="telefono" placeholder="Ingresa el telefono" class="form-control @error('phone') border border-danger @enderror" value="{{old('phone')}}">
                @error('phone')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
            </div>
        
            <div class="mb-3 form-group form-outline">
                <label for="fecha_nacimiento" class="form-label fs-5 px-0">Fecha de Nacimiento<span aria-hidden="true" class="required text-danger">*</span></label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control @error('fecha_nacimiento') border border-danger @enderror" value="{{old('fecha_nacimiento')}}">
                @error('fecha_nacimiento')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>
            <div class="mb-3 form-group form-outline">
                <label for="fecha_inicio" class="form-label fs-5 px-0">Fecha de Contratacion<span aria-hidden="true" class="required text-danger">*</span></label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control @error('fecha_inicio') border border-danger @enderror" value="{{old('fecha_inicio')}}">
                @error('fecha_inicio')
                    <div class="text-danger my-2 fs-6">
                        {{$message}}
                    </div>
                @enderror
                </div>

        

        <div class="mb-3 form-group form-outline ">
            <label for="mail" class="form-label fs-5 px-0">Email<span aria-hidden="true" class="required text-danger">*</span></label>
            <input type="text" name="mail" id="mail" placeholder="Ingresa el Email" class="form-control @error('mail') border border-danger @enderror" value="{{old('mail')}}">
             @error('mail')
                <div class="text-danger my-2 fs-6">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-field pb-4">
            <label for="roles_id" class="px-0">Quien reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <select class="form-control" id="roles_id" name="roles_id" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <option selected>Selecciona a un rol para el usuario</option>
                @foreach($rolesList as $item)
                    <option value="{{$item -> id}}" @if($modo != 'Crear') @if($item->id == $usuario->users_id) selected @else @endif @endif >{{$item -> rol}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 form-group form-outline ">
            <label for="contrasenia" class="form-label fs-5 px-0">Contraseña <span aria-hidden="true" class="required text-danger">*</span></label>
            <input type="password" name="contrasenia" id="contrasenia" placeholder="Ingresa la contraseña"
                    class="form-control @error('contrasenia') border border-danger @enderror">
            @error('contrasenia')
                <div class="text-danger my-2 fs-6">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-group form-outline ">
            <label for="password_confirmation" class="form-label fs-5 px-0">Repite la Contraseña <span aria-hidden="true" class="required text-danger">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Repite la contraseña" class="form-control @error('password_confirmation') border border-danger @enderror">
            @error('password_confirmation')
                <div class="text-danger my-2 fs-6">
                    {{$message}}
                </div>
            @enderror
        </div>
        

        @if ($modo != 'Consultar')
        <div class="px-4">
               
               <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} datos">
               
           </div>
           @endif
           <div class="px-4">
                <a href="{{url('usuario/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
           </div>
        
    </div>

    </div>
</div>
