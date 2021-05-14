<!--<h1>{{($modo)}} Reporte </h1> -->
@section('pageTitle', "[[$modo]] Reporte")
<br>

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

    <div class="form-group pb-4" >

        <label for="nombre" class="px-0"  >Nombre <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control" name="nombre" placeholder="Juan" value="{{ isset($donadores->nombre)?$donadores->nombre:old('nombre') }}" id="nombre" required  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
    </div>

    <div class="contact-form row pb-4">

        <div class="form-field pb-4">
            <label for="select_nino" class="px-0">Niño de quien se reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <select class="form-input" id="select_nino" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <option selected>Selecciona a un niño</option>
                <option>Juanito</option>
            </select>
        </div>

        <div class="form-field pb-4 col-lg-6">
            <label for="select_usuario" class="px-0">Quien reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <select class="form-input" id="select_usuario" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <option selected>Selecciona a un usuario</option>
                <option>Juan</option>
            </select>
        </div>

        <div class="form-field pb-4 col-lg-6">
            <label for="select_area" class="px-0">Area desde la que se reporta: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <select class="form-input" id="select_area" <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?>>
                <option selected>Selecciona a un area</option>
                <option>Psicologia</option>
            </select>
        </div>


        <div class="form-group pb-4 col-lg-6" >

        <label for="nombre" class="px-0"  >Calificacion del niño: <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="integer" class="form-control" name="calificacion" placeholder="1-10" id="calificacion" required  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
        </div>

        <div class="form-group pb-4" >

        <label for="enlace" class="px-0"  >Enlace a Google Drive para archivo del reporte (Opcional)</label>
            <input type="text" class="form-control" name="enlace" placeholder="drive.google.com" id="enlace" required  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
        </div>

        <div class="form-group pb-4" >

        <label for="nombre" class="px-0" >Comentarios</label>
            <input type="text" class="form-control" name="comentarios" id="comentarios" height="400rem"  <?php if ($modo == 'Consultar'){ ?> disabled <?php } ?> >
            
        </div>

        
    
        @if ($modo != 'Consultar')
        <div class="px-4">
               
               <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} reporte">
               
           </div>
           @endif
           <div class="px-4">
                <a href="{{url('donadores/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
           </div>
        
    </div>

    </div>
</div>
