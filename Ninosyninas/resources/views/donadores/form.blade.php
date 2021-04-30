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

    <div class="form-group">

        <label for="nombre">Nombre </label>
            <input type="text" class="form-control" name="nombre" value="{{ isset($donadores->nombre)?$donadores->nombre:old('nombre') }}" id="nombre" >
            <br>

    </div>

    <div class="contact-form row">

        <div class="form-field col-lg-6">

            <label for="apellido_paterno">Apellido Paterno</label>
            <input type="text" class="form-control"  name="apellido_paterno" value="{{ isset($donadores->apellido_paterno)?$donadores->apellido_paterno:old('apellido_paterno') }}"  id="apellido_paterno" >
            <br>
        </div>

        <div class="form-field col-lg-6">
        
            <label for="apellido_materno">Apellido Materno</label>
            <input type="text" class="form-control"  name="apellido_materno" value="{{ isset($donadores->apellido_materno)?$donadores->apellido_materno:old('apellido_materno') }}" id="apellido_materno" >
            <br>

        </div>

    </div>

    <label for="email">Correo</label>
    <input type="text" class="form-control"  name="email" value="{{ isset($donadores->email)?$donadores->email:old('email') }}" id="email" >
    <br>

    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control"  name="telefono" value="{{ isset($donadores->telefono)?$donadores->telefono:old('telefono') }}" id="telefono" >
    <br>

    

    <div class="contact-form row">

        <div class="form-field col-lg-6">
            <label for="calle_principal">Calle Principal</label>
            <input type="text" class="form-control"  name="calle_principal" value="{{ isset($donadores->calle_principal)?$donadores->calle_principal:old('calle_principal') }}" id="calle_principal" >
            <br>
        </div>

        <div class="form-field col-lg-6">
            <label for="calle_secundaria">Calle Secundaria</label>
            <input type="text" class="form-control"  name="calle_secundaria" value="{{ isset($donadores->calle_secundaria)?$donadores->calle_secundaria:old('calle_secundaria') }}" id="calle_secundaria">
            <br>
        </div>
    </div>

    <label for="codigo_postal">Código Postal</label>
    <input type="text" class="form-control"  name="codigo_postal" value="{{ isset($donadores->codigo_postal)?$donadores->codigo_postal:old('codigo_postal') }}" id="codigo_postal" >
    <br>

    <label for="colonia">Colonia</label>
    <input type="text" class="form-control"  name="colonia" value="{{ isset($donadores->colonia)?$donadores->colonia:old('colonia') }}" id="colonia" >
    <br>

    <div class="contact-form row">

      <div class="form-field col-lg-6">

        <label for="ciudad">Ciudad</label>
        <input type="text" class="form-control"  name="ciudad" value="{{ isset($donadores->ciudad)?$donadores->ciudad:old('ciudad') }}" id="ciudad" >
        <br>
      </div>

      <div class="form-field col-lg-6">

        <label for="estado">Estado</label>
        <input type="text" class="form-control"  name="estado" value="{{ isset($donadores->estado)?$donadores->estado:old('estado') }}" id="estado" >
        <br>

    </div>

    <label for="tipo_pago">Tipo de pago</label>
    <input type="text" class="form-control"  name="tipo_pago" value="{{ isset($donadores->tipo_pago)?$donadores->tipo_pago:old('tipo_pago') }}" id="tipo_pago" >
    <br>

    <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center">Facturar</h1>
    <hr>

    <label for="rfc">RFC</label>
    <input type="text" class="form-control"  name="rfc" value="{{ isset($donadores->rfc)?$donadores->rfc:'' }}" id="rfc">
    <br>

    <label for="numero_cuenta">Numero de Cuenta</label>
    <input type="text" class="form-control"  name="numero_cuenta" value="{{ isset($donadores->numero_cuenta)?$donadores->numero_cuenta:'' }}" id="numero_cuenta">
    <br>

    <label for="uso_cfdi">Código Postal</label>
    <input type="text" class="form-control"  name="uso_cfdi" value="{{ isset($donadores->uso_cfdi)?$donadores->uso_cfdi:'' }}" id="uso_cfdi">
    <br>

    <label for="observaciones">Observaciones</label>
    <input type="text" class="form-control"  name="observaciones" value="{{ isset($donadores->observaciones)?$donadores->observaciones:'' }}" id="observaciones">
    <br>
    <br>
    
    <select class="form-input" name="aprobado" id="aprobado" >

        <option value="">Selecciona </option>
        <option value="1" {{ isset($donadores) && $donadores->aprobado==1 ? "selected":'' }}>Aprobado</option>
        <option value="2" {{ isset($donadores) && $donadores->aprobado==2 ? "selected":'' }} >Desaprobado</option>
        
    </select>

   


            <div class="px-4">
               
                <input type="submit" class="btn btn-primary w-100 mt-4" value="{{($modo)}} datos">
            </div>
            <div class="px-4">
                 <a href="{{url('donadores/')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
            </div>




    </div>
</div>




<br>