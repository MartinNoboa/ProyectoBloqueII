@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('mainContent')


@section('header')
<div class='upper-half'> 
<br>
<br>
<br>
<br>
@endsection


<div class="container">
    <div class="row ">
        <div class="col-12 col-md-6" >
            <div class="card w-100 h-100 shadow">
                <div class="card-body">
                    <h2 class="titles "><strong>Dona vía paypal</strong></h2>
                    <br>
                    <div class="row">
                        <div class="col-12 col-md-6" >
                            <p>Donación única a través de tu cuenta de paypal</p>
                        </div>
                        <div class="col-12 col-md-6 text-center" >
                            <a class=" btn button-donar text-light rounded" href="https://www.paypal.com/paypalme/ninosyninas" target="_blank" rel="noreferrer noopener" role="button">Donar por paypal</a>
                        </div>
                    </div>
                    <hr>
                    
                    <h2 class="titles "><strong>Regístrate como donador</strong></h2>
                    <br>
                    <div class="row">
                        <div class="col-12 col-md-6" >
                            <p>Nos pondremos en contacto contigo en cuanto termines tu registro.</p>
                        </div>
                        <div class="col-12 col-md-6 text-center" >
                            <a class=" btn button-donar text-light rounded" href="{{url('/registro/donador')}}" role="button">Regístrate</a>
                        </div>
                    </div>
                    <br>
                    <hr>

                    <h2 class="titles "><strong>Domicilia tu tarjeta</strong></h2>
                    <br>
                    <div class="row">
                        <div class="col-12 col-md-6 text-justify" >
                            <p>Al registrarte como donador puedes domiciliar tu tarjeta con nosotros. Solo selecciona "Tarjeta (Domiciliado)" como metodo de pago.</p>
                        </div>
                        <div class="col-12 col-md-6 text-center" >
                            <a class=" btn button-donar text-light rounded" href="{{url('/registro/donador')}}" role="button">Regístrate</a>
                        </div>
                    </div>
                    <br>
                    <hr>

                    <h2 class="titles "><strong>Dona con transferencia</strong></h2>
                    <br>
                    <p>
                        Dona con transferencia
                        <br>
                        Bancomer
                        <br>
                        Niños y Niñas de México, A. C.
                        <br>
                        No. Cuenta: 0101426486
                        <br>
                        Clabe: 012680001014264867
                        <br>
                        Envía tu depósito por correo a
                        ninosyninasdemexico@yahoo.com
                        <br>
                        y te haremos llegar tu recibo deducible de impuestos.
                    </p>


                </div>
            </div>



        </div>
        <br>        
        <div class="col-12 col-md-6 ">
            <img src="{{url('img/fondo1.jpg')}}" class="shadow" alt="Cinque Terre" width="100%" height="100%"> 
        </div>
    </div>


    <br>
    <br>
    <br>

</div>




@endsection