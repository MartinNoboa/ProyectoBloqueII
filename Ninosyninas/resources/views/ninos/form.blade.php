<!--<h1>{{($modo)}} usuario</h1> -->
<br>

<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
    <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center"><h1>{{($modo)}} Ninos</h1></h1>
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

    <div class="form-group pb-4" >

        <label for="nombre" class="px-0">Nombre <span aria-hidden="true" class="required text-danger" >*</span></label>
        <input type="text" class="form-control" name="nombre" placeholder="Juan" value="{{ isset($ninos->nombre)?$ninos->nombre:old('nombre') }}" id="nombre" required  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
    </div>

    <div class="contact-form row pb-4">

        <div class="form-field col-lg-6">

            <label for="apellido_paterno" class="px-0">Apellido Paterno <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control" placeholder="Pérez" name="apellido_paterno" value="{{ isset($ninos->apellido_paterno)?$ninos->apellido_paterno:old('apellido_paterno') }}"  id="apellido_paterno" required  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
            
        </div>

        <div class="form-field col-lg-6 pb-4">
        
            <label for="apellido_materno" class="px-0">Apellido Materno <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control"  name="apellido_materno" placeholder="García" value="{{ isset($ninos->apellido_materno)?$ninos->apellido_materno:old('apellido_materno') }}" id="apellido_materno" required <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
            

        </div>

        <div class="form-field  pb-4">
            <label for="FechaNacimiento" class="px-0">Fecha de Nacimiento <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="date" class="form-control"  name="fecha_nacimiento" value="{{ isset($ninos->fecha_nacimiento)?$ninos->fecha_nacimiento:'' }}" id="fecha_nacimiento" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        </div>

        <div class="form-field  pb-4">
            <label for="grado" class="px-0">Grado <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="number" class="form-control"  name="grado" value="{{ isset($ninos->grado)?$ninos->grado:'' }}" id="grado" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        </div>

        <div class="form-field  pb-4">
            <label for="mail" class="px-0">Email </label>
            <input type="email" class="form-control"  name="mail" value="{{ isset($ninos->mail)?$ninos->mail:'' }}" id="mail" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        </div>
        <div class="form-field  pb-4">
            <label for="nombre_tutor" class="px-0">Nombre completo del padre o tutor </label>
            <input type="text" class="form-control"  name="nombre_tutor" value="{{ isset($ninos->nombre_tutor)?$ninos->nombre_tutor:'' }}" id="nombre_tutor" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        </div>
        <div class="form-field  pb-4">
            <label for="telefono" class="px-0">Teléfono </label>
            <input type="text" class="form-control"  name="telefono" value="{{ isset($ninos->telefono)?$ninos->telefono:'' }}" id="telefono" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
        </div>
        

        @if ($modo != 'Consultar')
        <div class="px-4">
               
               <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} datos">
               
           </div>
           @endif
           <div class="px-4">
                <a href="{{url('ninos/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
           </div>
        
    </div>

    </div>
</div>

