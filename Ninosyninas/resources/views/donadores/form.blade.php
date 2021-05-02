<!--<h1>{{($modo)}} usuario</h1>-->
<br>

<div class="d-flex align-items-center justify-content-center flex-column">
    <div class="p-4 w-50 bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
    <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center">Registar Donador</h1>
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
            <input type="text" class="form-control" name="nombre" placeholder="Juan" value="{{ isset($donadores->nombre)?$donadores->nombre:old('nombre') }}" id="nombre" required>
            
    </div>

    <div class="contact-form row pb-4">

        <div class="form-field col-lg-6">

            <label for="apellido_paterno" class="px-0">Apellido Paterno <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control" placeholder="Pérez" name="apellido_paterno" value="{{ isset($donadores->apellido_paterno)?$donadores->apellido_paterno:old('apellido_paterno') }}"  id="apellido_paterno" required>
            
        </div>

        <div class="form-field col-lg-6 pb-4">
        
            <label for="apellido_materno" class="px-0">Apellido Materno <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control"  name="apellido_materno" placeholder="García" value="{{ isset($donadores->apellido_materno)?$donadores->apellido_materno:old('apellido_materno') }}" id="apellido_materno" required>
            

        </div>

        <div class="form-field  pb-4">
            <label for="email" class="px-0">Correo <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="email" class="form-control"  placeholder="ejemplo@hotmail.com" name="email" value="{{ isset($donadores->email)?$donadores->email:old('email') }}" id="email" required>
        </div>

        <div class="form-field  pb-4">
            <label for="Telefono" class="px-0">Telefono <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="tel" class="form-control"  placeholder="7351745214" name="telefono" value="{{ isset($donadores->telefono)?$donadores->telefono:old('telefono') }}" id="telefono" required>
        </div>

        <div class="form-field col-lg-6 pb-4">
            <label for="calle_principal" class="px-0">Calle Principal <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control"  name="calle_principal" placeholder="Vista hermosa" value="{{ isset($donadores->calle_principal)?$donadores->calle_principal:old('calle_principal') }}" id="calle_principal" required>
            
        </div>

        <div class="form-field col-lg-6 pb-4">
            <label for="calle_secundaria" class="px-0">Calle Secundaria <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control"  name="calle_secundaria" placeholder="Paseo de los toros" value="{{ isset($donadores->calle_secundaria)?$donadores->calle_secundaria:old('calle_secundaria') }}" id="calle_secundaria" required>
        </div>

        <div class="form-field  pb-4">
            <label for="codigo_postal" class="px-0">Código Postal <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="number" class="form-control"  name="codigo_postal" placeholder="75030" value="{{ isset($donadores->codigo_postal)?$donadores->codigo_postal:old('codigo_postal') }}" id="codigo_postal" required >
        </div>

        <div class="form-field  pb-4">
            <label for="colonia" class="px-0">Colonia <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control"  name="colonia" placeholder="Tierra Larga" value="{{ isset($donadores->colonia)?$donadores->colonia:old('colonia') }}" id="colonia" required>
        </div>

        <div class="form-field col-lg-6 pb-4">
            <label for="ciudad" class="px-0">Ciudad <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control"  name="ciudad"  placeholder="Santiago de Querétaro" value="{{ isset($donadores->ciudad)?$donadores->ciudad:old('ciudad') }}" id="ciudad" required>
        </div>

        <div class="form-field col-lg-6 pb-4">
            <label for="estado" class="px-0">Estado <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control" placeholder="Querétaro" name="estado" value="{{ isset($donadores->estado)?$donadores->estado:old('estado') }}" id="estado" required>
        </div>

        <div class="form-field  pb-4">
            <label for="tipo_pago" class="px-0">Tipo de pago <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text" class="form-control"  name="tipo_pago" placeholder="Efectivo" value="{{ isset($donadores->tipo_pago)?$donadores->tipo_pago:old('tipo_pago') }}" id="tipo_pago" required>
        </div>

        <div class="form-field  ">

            <p >Selecciona el estado del donador <span aria-hidden="true" class="required text-danger" >*</span></p>
            </div>

            <select class="form-input" name="aprobado" id="aprobado" required>

                <option value="">Selecciona </option>
                <option value="1" {{ isset($donadores) && $donadores->aprobado==1 ? "selected":'' }}>Aprobado</option>
                <option value="2" {{ isset($donadores) && $donadores->aprobado==2 ? "selected":'' }} >Desaprobado</option>
                
            </select>

        </div>
        
        <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center">Facturar</h1>
        <hr>

        <div class="form-field  pb-4">
            <label for="rfc" class="px-0">RFC</label>
            <input type="text" class="form-control" placeholder="MELM8305281H0" name="rfc" value="{{ isset($donadores->rfc)?$donadores->rfc:'' }}" id="rfc">
        </div>

        <div class="form-field  pb-4">
            <label for="numero_cuenta" class="px-0">Numero de Cuenta</label>
            <input type="text" class="form-control"  placeholder="1234 1234 1234 12345" name="numero_cuenta" value="{{ isset($donadores->numero_cuenta)?$donadores->numero_cuenta:'' }}" id="numero_cuenta">
        </div>

        <div class="form-field  pb-4">
            <label for="uso_cfdi" class="px-0">Uso CFDI</label>
            <input type="text" class="form-control" placeholder="ejemplo" name="uso_cfdi" value="{{ isset($donadores->uso_cfdi)?$donadores->uso_cfdi:'' }}" id="uso_cfdi">
        </div>

        <div class="form-field  pb-4">
            <label for="observaciones" class="px-0"> Observaciones</label>
            <input type="text" class="form-control" placeholder="Donador en revisión" name="observaciones" value="{{ isset($donadores->observaciones)?$donadores->observaciones:'' }}" id="observaciones">
        </div>

        <div class="px-4">
               
               <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} datos">
           </div>
           <div class="px-4">
                <a href="{{url('donadores/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
           </div>
        
    </div>

    </div>
</div>

