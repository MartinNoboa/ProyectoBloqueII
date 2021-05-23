@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('mainContent')


@section('header')
<div class='upper-half '> 
<br>
<br>
@endsection

<div class=" bottom-half">

        <div class="container ">
            <div class="row ">
                <div class="col-12 col-md-6" >
                    <div class="card w-100 h-100 shadow">
                        <div class="card-body">
                            <h2 class="titulo-azul "><strong>Dona vía paypal</strong></h2>
                            <br>
                            <div class="row">
                                <div class="col-12 col-md-6" >
                                    <p>Donación única a través de tu cuenta de paypal</p>
                                </div>
                                <div class="col-12 col-md-6 text-center" >
                                    <a class=" btn btn-primary text-light rounded" href="https://www.paypal.com/paypalme/ninosyninas" target="_blank" rel="noreferrer noopener" role="button">Donar por paypal</a>
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
                                    <a class=" btn button-donar text-light rounded" href="{{url('/donador')}}" role="button">Regístrate</a>
                                </div>
                            </div>
                            <br>
                            <hr>

                            <h2 class="titulo-rosa "><strong>Domicilia tu tarjeta</strong></h2>
                            <br>
                                <div class="text-justify" >
                                    <p>Al registrarte como donador puedes domiciliar tu tarjeta con nosotros. Solo selecciona "Tarjeta (Domiciliado)" como metodo de pago.</p>
                                </div>
                            <br>
                            <hr>

                            <h2 class="titulo-verde "><strong>Dona con transferencia</strong></h2>
                            <br>
                            <?php
                            $string= $txt[8]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                            ?>
                            <?php echo $string1 ?>


                        </div>
                    </div>



                </div>       
                <div class="col-12 col-md-6 ">
                    <img src="{{url('img/36.jpg')}}" class="shadow" alt="Cinque Terre" width="100%" height="100%"> 
                </div>
            </div>


            <br>
            <br>
            <br>

        </div>

</div>





@endsection