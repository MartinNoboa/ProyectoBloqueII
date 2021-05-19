<!--<h1>{{($modo)}} Reporte </h1> -->
@section('pageTitle', "$modo Reporte")


<div class='container'><a class="btn btn-outline-primary p-2 m-2" href="{{url('/reporte')}}">Regresar a reportes</a></div>
 
<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
    <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center"><h1>{{($modo)}} Reporte</h1></h1>
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

    <div class="contact-form row pb-4">

        <div class="form-field pb-4">
            <label for="child_id" class="px-0">Niño de quien se reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <select class="form-control" id="child_id" name="child_id" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <option selected>Selecciona a un niño</option>
            @foreach($childList as $item)
                <option value="{{$item -> id}}" @if($modo != 'Crear') @if($item->id == $reporte->child_id) selected @else @endif @endif>{{$item -> nombre}} {{$item -> apellido_paterno}} {{$item -> apellido_materno}}</option>

            @endforeach
                
                <option>Juanito</option>
            </select>
        </div>

        <div class="form-field pb-4 col-lg-6">
            <label for="users_id" class="px-0">Quien reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <select class="form-control" id="users_id" name="users_id" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <option selected>Selecciona a un usuario</option>
                @foreach($userList as $item)
                    <option value="{{$item -> id}}" @if($modo != 'Crear') @if($item->id == $reporte->users_id) selected @else @endif @endif >{{$item -> nombre}} {{$item -> apellido_paterno}} {{$item -> apellido_materno}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-field pb-4 col-lg-6">
            <label for="area_id" class="px-0">Area desde la que se reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <select class="form-control" id="area_id" name="area_id"<?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <option selected>Selecciona a un area</option>
                <option value="1">Psicologia</option>
                @foreach($areasList as $item)
                    <option value="{{$item -> id}}" @if($modo != 'Crear') @if($item->id == $reporte->area_id) selected @else @endif @endif >{{$item -> area}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group pb-4 col-lg-6" >

        <label for="nombre" class="px-0"  >Calificacion del niño: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="number" maxlenght="2" class="form-control" name="calificacion" placeholder="1-10" id="calificacion" required @if($modo == 'Editar' || $modo == 'Consultar') value = "{{$reporte->calificacion}}" @else @endif  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
        </div>

        <div class="form-group pb-4" >

        <label for="enlace" class="px-0"  >Enlace a Google Drive para archivo del reporte (Opcional)</label>
            <input type="text" class="form-control" name="enlace" placeholder="drive.google.com" id="enlace" @if($modo == 'Editar' || $modo == 'Consultar') value = "{{$reporte->enlace}}" @else @endif <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
        </div>

        <div class="form-group pb-4" >

        <label for="nombre" class="px-0" >Comentarios</label>
            <input type="text" class="form-control" name="comentarios" id="comentarios" height="400rem" @if($modo == 'Editar' || $modo == 'Consultar') value = "{{$reporte->comentarios}}" @else @endif  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
        </div>

        
    
        @if ($modo != 'Consultar')
        <div class="px-4">
               
               <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} reporte">
               
           </div>
           @endif
           <div class="px-4">
                <a href="{{url('reporte/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
           </div>
        
    </div>

    </div>
</div>
