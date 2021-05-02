
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



    <div class="container mt">

    <div class="form-group">

        <label for="Nombre" class="px-0">Nombre <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control" name="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre:'' }}" id="Nombre">
        <br>

    </div>

    <div class="form-group">

    <label for="ApellidoMaterno" class="px-0">Apellido Materno <span aria-hidden="true" class="required text-danger" >*</span></label>
    <input type="text" class="form-control"  name="ApellidoMaterno" value="{{ isset($usuario->ApellidoMaterno)?$usuario->ApellidoMaterno:'' }}"  id="ApellidoMaterno">
    <br>

    </div>

    <label for="ApellidoPaterno" class="px-0">Apellido Paterno <span aria-hidden="true" class="required text-danger" >*</span></label>
    <input type="text" class="form-control"  name="ApellidoPaterno" value="{{ isset($usuario->ApellidoPaterno)?$usuario->ApellidoPaterno:'' }}" id="ApellidoPaterno">
    <br>

    <label for="Telefono" class="px-0">Telefono</label>
    <input type="text" class="form-control"  name="Telefono"  id="Telefono" value="{{ isset($usuario->Telefono)?$usuario->Telefono:'' }}" id="Telefono">
    <br>

    <label for="FechaContratacion" class="px-0">Fecha de Contratacion</label>
    <input type="date" class="form-control"  name="FechaContratacion" value="{{ isset($usuario->FechaContratacion)?$usuario->FechaContratacion:'' }}" id="FechaContratacion">
    <br>

    <label for="FechaNacimiento" class="px-0">Fecha de Nacimiento</label>
    <input type="date" class="form-control"  name="FechaNacimiento" value="{{ isset($usuario->FechaNacimiento)?$usuario->FechaNacimiento:'' }}" id="FechaNacimiento">
    <br>

    <label for="Email" class="px-0">Correo</label>
    <input type="text" class="form-control"  name="Email" value="{{ isset($usuario->Email)?$usuario->Email:'' }}" id="Email">
    <br>



    <input type="submit" class="btn btn-primary" value="{{($modo)}} datos">

    <a href="{{url('usuario/')}}" class="btn btn-success">Regresar</a>
    </div>

    
    

    <br>
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

            <label for="Nombre" class="px-0">Nombre <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control" name="nombre" value="{{ isset($usuario->nombre)?$usuario->nombre:'' }}" id="nombre" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
            <br>

        </div>

        <div class="form-group">

        <label for="ApellidoPaterno" class="px-0">Apellido Paterno <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control"  name="apellido_paterno" value="{{ isset($usuario->apellido_paterno)?$usuario->apellido_paterno:'' }}" id="apellido_paterno" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        <br>

        <label for="ApellidoMaterno" class="px-0">Apellido Materno <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control"  name="apellido_materno" value="{{ isset($usuario->apellido_materno)?$usuario->apellido_materno:'' }}"  id="apellido_materno" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        <br>

        </div>

        

        <label for="Telefono" class="px-0">Telefono <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control"  name="telefono"  id="telefono" value="{{ isset($usuario->telefono)?$usuario->telefono:'' }}" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
        <br>

        <label for="FechaContratacion" class="px-0">Fecha de Contratacion <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="date" class="form-control"  name="fecha_inicio" value="{{ isset($usuario->fecha_inicio)?$usuario->fecha_inicio:'' }}" id="fecha_inicio" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        <br>

        <label for="FechaNacimiento" class="px-0">Fecha de Nacimiento <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="date" class="form-control"  name="fecha_nacimiento" value="{{ isset($usuario->fecha_nacimiento)?$usuario->fecha_nacimiento:'' }}" id="fecha_nacimiento" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        <br>

        <label for="Email" class="px-0">Correo <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control"  name="mail" value="{{ isset($usuario->mail)?$usuario->mail:'' }}" id="mail" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        <br>
    
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
