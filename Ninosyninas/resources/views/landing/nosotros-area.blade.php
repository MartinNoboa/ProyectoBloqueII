@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='background'>

<div class="container mb-5">
<br>
<br>
    <div class="container">
        <div class="container">
            <div class="container bg-light zelda rounded text-center ancho rouded shadow ">
                
                    <div class="row ">
                        <div class="col-sm-12 col-md-4">
                            <a href="{{url('/nosotros-areas')}}" class=" center" > <h5> Areas de atención</h5></a>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <a href="{{url('/nosotros-logros')}}" class =" center" ><h5> Logros</h5></a>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <a href="{{url('/nosotros-ayuda')}}" class =" center"><h5> Ayuda</h5></a>
                        </div>
                    </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('mainContent')

<div class="background cont">
    <div class="container">
        <h1 class='titulo text-center font-title-title'>¿Qué hacemos?</h1>
        <br>
        <br>
        <div class="text-center">
                <?php
                            $string= $txt[10]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo ' <h5 data-aos="zoom-out-left">'.$string1.' <h5>' ?>
        </div>
        <br>
        <br>
        <div class="row mb-5">
            <div class="col-4">
                <div class="container text-center">
                    <div class="container ">
                        <br>
                        <h3 class="titulo-rosa font-title">Áreas de atención</h3>
                        <br>
                        <?php
                            $string= $txt[9]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                        ?>
                        <?php echo ' <h5>'.$string1.' <h5>' ?>
                        <br>
                        <br>
                        <table class='content-table'>
                            <?php
                                $arrLength= count($atencion);
                                for ($i = 0; $i < $arrLength; $i++) {
                                    echo '<tr>';
                                    echo '<td>'.$atencion[$i]['contenido'].'</td>';
                                    echo '</tr>';
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-8 text-center">
                <br>
                <br>
                <img src="{{url('img/17.jpg')}}" width="80%">
                <br>
            </div>
        </div>


        
        <div class="row mb-5">
            <div class="col-4">
                <div class="container text-center">
                    <br>
                    <h3 class="text-center  titulo-rojo font-title">Programa de educación</h3>
                    <br>
                    <h5>Apoya y fortalece el acceso a alguna modalidad educativa, motiva el interés tanto de los niños como de los padres por la escuela, a fin de lograr su incorporación y permanencia en la misma.</h5>
                    <table class='content-table'>
                    <?php
                                $arrLength= count($educacion);
                                for ($i = 0; $i < $arrLength; $i++) {
                                    echo '<tr>';
                                    echo '<td><h5>'.$educacion[$i]['contenido'].'</h5></td>';
                                    echo '</tr>';
                                }
                    ?>
                    </table>
                    <br>  
                </div>
            </div>

            
            <div class="col-8 text-center">
                <br>
                <br>
                <img src="{{url('img/30.jpg')}}"  width="80%">
                <br>
                <br>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-4">
                <div class="container text-center ">
                        <h3 class="titulo-verde font-title">Programa de Desarrollo Institucional Objetivo</h3>
                        <br>
                        <?php
                            $string= $txt[12]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                        ?>
                        <?php echo ' <h5>'.$string1.' <h5>' ?>
                </div>
            </div>
            <div class="col-8 text-center">
                <img src="{{url('img/16.jpg')}}" width="80%">
            </div>
        </div>

        <br>
        <br>
    </div>



</div>

</div>

@endsection