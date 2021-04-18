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
    
    <form method="POST" action= "{{ url('') }}">
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
                <label for='apellidoPaterno'>Apellido parterno <span aria-hidden="true" class="required">*</span></label><br>
                <input placeholder='Rodríguez' id='apellidoPaterno' name="apellidoPaterno" class='form-input text-center' value= "{{old('apellidoPaterno')}}" required  >
                <br>
                <br>
            </div>
            <br>
            <div class="col-12 col-md-4">
                <label for='apellidoPaterno'>Apellido materno <span aria-hidden="true" class="required">*</span></label><br>
                <input placeholder='Perez' id='apellidoPaterno' name="apellidoPaterno" class='form-input text-center' value= "{{old('nombre')}}" required  >
                <br>
                <br>
            </div>
        </div>
        


        <div class="row">
            <div class="col-12 col-md-4" >
                <label for='email'>Email <span aria-hidden="true" class="required">*</span></label><br>
                <input placeholder='ejemplo@correo.com' type='email' id='email' name='email' class='form-input text-center' value= "{{old('email')}}" required>
                <br>
                <br>
            </div>
            <br>       
            <div class="col-12 col-md-4 ">
                <label for='telfono'>Telefono</label><br>
                <input placeholder='Juan Perez Rodríguez' id='telfono' name="telfono" class='form-input text-center' value= "{{old('telfono')}}"  >
                <br>
                <br>
            </div>
            <br>
            <div class="col-12 col-md-4">
                <label for='rfc'>RFC</label><br>
                <input placeholder='AAAA00001A1' type='text' id='rfc' name='rfc' class='form-input text-center' minlength="12" maxlength="13" value= "{{old('rfc')}}" >
                <br>
                <br>
            </div>
        </div>
    </div>

        <h4 class="text-center">Dirección</h4>
        <label for='direccion'>Dirección <span aria-hidden="true" class="required">*</span></label><br>
        <input placeholder='Avenida de la luz 112, int 15.'  id='direccion' name='direccion' class='form-input text-center' value= "{{old('direccion')}}" required>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6" >
                    <label for='codigoPostal'>Código postal <span aria-hidden="true" class="required">*</span></label><br>
                    <input placeholder='15455' type="number"  id='codigoPostal' name='codigoPostal' class='form-input text-center' value= "{{old('codigoPostal')}}" required>
                    <br>
                    <br>
                </div>
                <br>       
                <div class="col-12 col-md-6 ">
                    <label for='colonia'>Colonia</label><br>
                    <input placeholder='Los moros'  id='colonia' name='colonia' class='form-input text-center' value= "{{old('colonia')}}" >
                    <br>
                    <br>
                </div>
                <br>
            </div>

            <div class="row">
                <div class="col-12 col-md-6" >
                    <label for='cuidad'>Ciudad <span aria-hidden="true" class="required">*</span></label><br>
                    <input placeholder='Querétaro'  id='cuidad' name='cuidad' class='form-input text-center' value= "{{old('cuidad')}}" required>
                    <br>
                    <br>
                </div>
                <br>       
                <div class="col-12 col-md-6 ">
                    <label for='Estado'>Estado <span aria-hidden="true" class="required">*</span></label><br>
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
                    <label for='email'>Método de pago <span aria-hidden="true" class="required">*</span></label><br>
                        <select class='form-input' name="cars" id="cars" required>
                            <option value="volvo">Transferencia</option>
                            <option value="saab">Paypal</option>
                            <option value="mercedes">Depósito</option>
                        </select>   
                    </label>             
                    <br>
                    <br>
                </div>

                <div class="col-12 col-md-6 ">
                     <label for='usoCFDI'>Uso CFDI</label><br>
                     <input placeholder='comprobante ' id='usoCFDI' name='usoCFDI' class='form-input text-center' value= "{{old('usoCFDI')}}" >
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
        <div class="text-center">
            <a class=" btn button-donar text-light rounded" href="#" role="button">Regístrate</a>
        </div>
            
        <br>
    </form>


</div>
<br>
<br><br>






@endsection