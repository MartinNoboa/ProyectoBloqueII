@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('mainContent')


@section('header')

<div class='upper-half'> 
    <div class=" pt-5">
        <h1 class='text-center titulo'>Donaciones</h1>
        <h3 class='text-center titulo mb-5'>Regístrate como donador</h3>

    </div>
    <div class="container">
    @if(!empty($message))
    <div class="alert alert-success alert-dismissible" role="alert">
                Sus datos para registro han sido enviados con éxito
                <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="btn pull-right" >&times;</span>
                </button>
                </div>
    </div>
    @endif
</div>

@endsection



<div class="bottom-half">

    <div class="container text-justify">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis placerat nulla. 
            Vesbulum preum, nisl non posuere varius, lectus massa scelerisque lacus, sed dignissim quam metus eu metus.
            Donec orci quam, fermentum vitae nibh ac, rutrum congue nisi.
            Phasellus non tortor enim. Vesbulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
            Class aptent taci sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos (informacion acerca del registro de donadores).</p>
        
        <form method="POST" action= "{{ url('/donador') }}">
            @csrf
        <br>
        <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4" >
                            <label for='nombre'>Nombre <span aria-hidden="true" class="required text-danger">*</span></label><br> 
                            <input placeholder='Juan' id='nombre' name="nombre" class='form-input  round' value= "{{old('nombre')}}" required  >
                            <br>
                            <br>
                        </div>
                        <br>       
                        <div class="col-12 col-md-4 ">
                            <label for='apellido_paterno' >Apellido parterno <span aria-hidden="true" class="required text-danger">*</span></label><br>
                            <input placeholder='Rodríguez' id='apellido_paterno' name="apellido_paterno" class='form-input ' value= "{{old('apellido_paterno')}}" required  >
                            <br>
                            <br>
                        </div>
                        <br>
                        <div class="col-12 col-md-4">
                            <label for='apellido_materno' >Apellido materno <span aria-hidden="true" class="required text-danger">*</span></label><br>
                            <input placeholder='Perez' id='apellido_materno' name="apellido_materno" class='form-input ' value= "{{old('apellido_materno')}}" required  >
                            <br>
                            <br>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-12 col-md-6" >
                            <label for='email' >Email <span aria-hidden="true" class="required text-danger">*</span></label><br>
                            <input placeholder='ejemplo@correo.com' type='email' id='email' name='email' class='form-input ' value= "{{old('email')}}" required>
                            <br>
                            <br>
                        </div>
                        <br>       
                        <div class="col-12 col-md-6 ">
                            <label for='telefono'>Telefono <span aria-hidden="true" class="required text-danger">*</span></label><br>
                            <input placeholder='4424587458' id='telefono' name="telefono" class='form-input ' value= "{{old('telefono')}}" required>
                            <br> 
                            <br>
                        </div>
                        <br>
                        
                    </div>
                </div>

        </div>
        

            <h4 class="text-center">Dirección</h4>
            <label for='calle_principal' >Calle principal <span aria-hidden="true" class="required text-danger">*</span></label><br>
            <input placeholder='Avenida de la luz 112, int 15.'  id='calle_principal' name='calle_principal' class='form-input ' value= "{{old('calle_principal')}}" required>
            <br>
            <br>

            <label for='calle_secundaria' >Calle secuandaria <span aria-hidden="true" class="required text-danger">*</span></label><br>
            <input placeholder='Calle cerrito viejo.'  id='calle_secundaria' name='calle_secundaria' class='form-input ' value= "{{old('calle_secundaria')}}" required>
            <br>
            <br>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6" >
                        <label for='codigo_postal' class="px-" >Código postal <span aria-hidden="true" class="required text-danger">*</span></label><br>
                        <input placeholder='15455' type="number"  id='codigo_postal' name='codigo_postal' class='form-input ' value= "{{old('codigo_postal')}}" required>
                        <br>
                        <br>
                    </div>
                    <br>       
                    <div class="col-12 col-md-6 ">
                        <label for='colonia'  >Colonia <span aria-hidden="true" class="required text-danger">*</span></label><br>
                        <input placeholder='Los moros'  id='colonia' name='colonia' class='form-input ' value= "{{old('colonia')}}" required>
                        <br>
                        <br>
                    </div>
                    <br>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6" >
                        <label for='ciudad'  >Ciudad <span aria-hidden="true" class="required text-danger">*</span></label><br>
                        <input placeholder='Querétaro'  id='ciudad' name='ciudad' class='form-input ' value= "{{old('cuidad')}}" required>
                        <br>
                        <br>
                    </div>
                    <br>       
                    <div class="col-12 col-md-6 " >
                        <label for='estado' >Estado <span aria-hidden="true" class="required text-danger">*</span></label><br>
                        <input placeholder='Querétaro'  id='estado' name='estado' class='form-input' value= "{{old('estado')}}" required>
                        <br>
                        <br>
                    </div>
                    
                    <br>
                </div>
            </div>



            <hr>
            <h4 class="text-center mt-5">Donación</h4>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6" >
                        <label for='tipo_pago'  >Método de pago <span aria-hidden="true" class="required text-danger">*</span></label><br>
                            <select class='form-input' name="tipo_pago" id="tipo_pago" required>
                                <option value="Transferencia">Transferencia</option>
                                <option value="Paypal">Paypal</option>
                                <option value="Depósito">Depósito</option>
                            </select>   
                        </label>             
                        <br>
                        <br>
                    </div>

                    <div class="col-12 col-md-6 ">
                        <label for='uso_cfdi'>Uso CFDI</label><br>
                        <input placeholder='5445 ' id='uso_cfdi' name='uso_cfdi' class='form-input' value= "{{old('usoCFDI')}}" >
                        <br>
                        <br>
                    </div>
                    <br>
                </div>
            </div>

            <label for='observaciones'>Observaciones</label></label><br>
            <textarea placeholder='Comentarios adicionales' id='observaciones' name='observaciones' class='form-input' value= "{{old('observaciones')}}" ></textarea>
            <br>
            <br>

            <input id="aprobado" name="aprobado" type="hidden" value="2">
            <div class="text-center">
            <input type="submit" class=" btn button-donar text-light rounded" value="Regístrate"></input>
            </div>
                
            <br>
        </form>


    </div>

    <div class="pb-5">
        
    </div>

</div>
    
</div>






@endsection