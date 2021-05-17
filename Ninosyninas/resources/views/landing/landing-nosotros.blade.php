@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")


@section('mainContent')
<div class='upper-half'>

<div class="container-fluid">
<br>
<br>
    <div class="container">
        <div class="container">
            <div class="container bg-light zelda rounded text-center ancho ">
                    
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
    <br>
    <br>
    <br>
    <br>
    <div class="text-justyfy center">
            <?php
                            $string= $txt[3]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
            <?php echo $string1 ?>
    </div>
    <img class="center" src="{{url('img/29.png')}}">
    <br>
    <br>
    <hgroup class="text-center">
        <h1>Patronato</h1>
    </hgroup>
    <br>
    <br>
    </div>
    <div class='bottom-half '>
    <div class="container-fluid lower-half">
        <div class="container position-relative " style="width: 70%">
            <div class="grid-3  row ">
                <div class="card col-sm-12 col-md-4" style="width: 100%">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <?php
                            $string1= $patronato[0]['rol'];
                            echo '<h5>'.$string1.'</h5>';
                            $string2= $patronato[0]['nombre'];
                            echo '<p>'.$string2.'</p>';
                            echo ' <br>';
                            $string= $patronato[0]['informacion'];
                            $string3 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                            echo '<p class="card-text">'.$string3.'</p>';
                        ?>
                         
                    </div>
                </div>
                <div class="card col-sm-12 col-md-4" style="width: 100%">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <?php
                            $string1= $patronato[1]['rol'];
                            echo '<h5>'.$string1.'</h5>';
                            $string2= $patronato[1]['nombre'];
                            echo '<p>'.$string2.'</p>';
                            echo ' <br>';
                            $string= $patronato[1]['informacion'];
                            $string3 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                            echo '<p class="card-text">'.$string3.'</p>';
                        ?>
                        
                    </div>
                </div>
                <div class="card col-sm-12 col-md-4" style="width: 100%">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        <br>
                        <br>
                        <?php
                            $string1= $patronato[2]['rol'];
                            echo '<h5>'.$string1.'</h5>';
                            $string2= $patronato[2]['nombre'];
                            echo '<p>'.$string2.'</p>';
                            echo ' <br>';
                            $string= $patronato[2]['informacion'];
                            $string3 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                            echo '<p class="card-text">'.$string3.'</p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        
        <div class="container position-relative" style="width: 70%">
            <div class="grid-3 text-center row">
                <?php
                    $arrLength= count($patronato);
                    for ($i = 0; $i < $arrLength; $i++) {
                        if($patronato[$i]['rol']=='Vocal'){
                            echo '<div class="card col-sm-12 col-md-4" style="width: 100%">';
                                echo '<div class="card-body">';
                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">';
                                        echo '<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>';
                                    echo '</svg>';
                                    echo '<br>';
                                    echo '<br>';
                                    $string1= $patronato[$i]['rol'];
                                    echo '<h5>'.$string1.'</h5>';
                                    $string2= $patronato[$i]['nombre'];
                                    echo '<p>'.$string2.'</p>';
                                    echo ' <br>';
                                    $string= $patronato[$i]['informacion'];
                                    $string3 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                                    echo '<p class="card-text">'.$string3.'</p>';
                                echo '</div>';
                            echo '</div>';
                        }
                        
                    }
                                    
                ?>
            </div>
        </div>
</div>
<br>
<br>

</div>

@endsection