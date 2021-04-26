@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('mainContent')


@section('header')
<div class='upper-half'> 
<br>
<br>
<h1 class='text-center titulo'>Donaciones</h1>
<h3 class='text-center titulo'>Registrate como donador</h3>
<br>
<br>
@endsection

<div class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis placerat nulla. 
        Vesbulum preum, nisl non posuere varius, lectus massa scelerisque lacus, sed dignissim quam metus eu metus.
         Donec orci quam, fermentum vitae nibh ac, rutrum congue nisi.
         Phasellus non tortor enim. Vesbulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
         Class aptent taci sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos (informacion acerca del registro de donadores).</p>
    
    <form method="POST" action= "{{ url('/donador/') }}">
        @csrf
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4" >
                <label for='nombre'>Nombre <span aria-hidden="true" class="required">*</span></label><br> 
                <input placeholder='Juan' id='nombre' name="nombre" class='form-input text-center round' value= "{{old('nombre')}}" required  >
                <br>
                <br>
            </div>
            <br>       
            <div class="col-12 col-md-4 ">
                <label for='apellido_paterno'>Apellido parterno <span aria-hidden="true" class="required">*</span></label><br>
                <input placeholder='Rodríguez' id='apellido_paterno' name="apellido_paterno" class='form-input text-center' value= "{{old('apellido_paterno')}}" required  >
                <br>
                <br>
            </div>
            <br>
            <div class="col-12 col-md-4">
                <label for='apellido_materno'>Apellido materno <span aria-hidden="true" class="required">*</span></label><br>
                <input placeholder='Perez' id='apellido_materno' name="apellido_materno" class='form-input text-center' value= "{{old('apellido_materno')}}" required  >
                <br>
                <br>
            </div>
        </div>
        

        <div class="row">
            <div class="col-12 col-md-6" >
                <label for='email'>Email <span aria-hidden="true" class="required">*</span></label><br>
                <input placeholder='ejemplo@correo.com' type='email' id='email' name='email' class='form-input text-center' value= "{{old('email')}}" required>
                <br>
                <br>
            </div>
            <br>       
            <div class="col-12 col-md-6 ">
                <label for='telefono'>Telefono <span aria-hidden="true" class="required">*</span></label><br>
                <input placeholder='4424587458' id='telefono' name="telefono" class='form-input text-center' value= "{{old('telefono')}}" required >
                <br>
                <br>
            </div>
            <br>
            
        </div>
    </div>

        <h4 class="text-center">Dirección</h4>
        <label for='calle_principal'>Calle principal <span aria-hidden="true" class="required">*</span></label><br>
        <input placeholder='Avenida de la luz 112, int 15.'  id='calle_principal' name='calle_principal' class='form-input text-center' value= "{{old('calle_principal')}}" required>
        <br>
        <br>

        <label for='calle_secundaria'>Calle secuandaria</label><br>
        <input placeholder='Calle cerrito viejo.'  id='calle_secundaria' name='calle_secundaria' class='form-input text-center' value= "{{old('calle_secundaria')}}" >
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6" >
                    <label for='codigo_postal'>Código postal <span aria-hidden="true" class="required">*</span></label><br>
                    <input placeholder='15455' type="number"  id='codigo_postal' name='codigo_postal' class='form-input text-center' value= "{{old('codigo_postal')}}" required>
                    <br>
                    <br>
                </div>
                <br>       
                <div class="col-12 col-md-6 ">
                    <label for='colonia'>Colonia <span aria-hidden="true" class="required">*</span></label><br>
                    <input placeholder='Los moros'  id='colonia' name='colonia' class='form-input text-center' value= "{{old('colonia')}}" required>
                    <br>
                    <br>
                </div>
                <br>
            </div>

            <div class="row">
                <div class="col-12 col-md-6" >
                    <label for='ciudad'>Ciudad <span aria-hidden="true" class="required">*</span></label><br>
                    <input placeholder='Querétaro'  id='ciudad' name='ciudad' class='form-input text-center' value= "{{old('cuidad')}}" required>
                    <br>
                    <br>
                </div>
                <br>       
                <div class="col-12 col-md-6 ">
                    <label for='estado'>Estado <span aria-hidden="true" class="required">*</span></label><br>
                    <input placeholder='Querétaro'  id='estado' name='estado' class='form-input text-center' value= "{{old('estado')}}" required>
                    <br>
                    <br>
                </div>
                
                <br>
            </div>
        </div>



        <hr>
        <h4 class="text-center">Donacion</h4>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6" >
                    <label for='tipo_pago'>Método de pago <span aria-hidden="true" class="required">*</span></label><br>
                        <select class='form-input' name="tipo_pago" id="tipo_pago" required>
                            <option value="volvo">Transferencia</option>
                            <option value="saab">Paypal</option>
                            <option value="mercedes">Depósito</option>
                        </select>   
                    </label>             
                    <br>
                    <br>
                </div>

                <div class="col-12 col-md-6 ">
                     <label for='uso_cfdi'>Uso CFDI</label><br>
                     <input placeholder='comprobante ' id='uso_cfdi' name='uso_cfdi' class='form-input text-center' value= "{{old('usoCFDI')}}" >
                     <br>
                     <br>
                    
                </div>
                <br>
            </div>
        </div>

        <label for='observaciones'>Observaciones</label></label><br>
        <textarea placeholder='Comentarios adicionales' id='observaciones' name='observaciones' class='form-input text-center' value= "{{old('observaciones')}}" ></textarea>
        <br>
        <br>

        <input id="aprobado" name="aprobado" type="hidden" value="0">
        <div class="text-center">
        <input type="submit" class=" btn button-donar text-light rounded" value="Regístrate"></input>
        </div>
            
        <br>
    </form>


</div>
<br>
<br><br>






@endsection