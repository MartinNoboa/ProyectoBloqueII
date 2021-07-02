@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')

<div class='background cont' > 

<h1 class='text-center titulo-verde pb-5 pt-5 font-title-title' >¡Ponte en contacto con nosotros!</h1>

@endsection






@section('mainContent')

@if(Session::has('mensaje'))
    <div class="container">

        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje')}}
            <button type="button" class="btn Button_alert" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="btn pull-right">&times;</span>
            </button>
        </div>

    </div>
    @endif

<div class='table-wt center'>
    <br>
    <br>
    @if($errors ->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
        @endforeach
    @endif

    

    <form method="POST" action= "{{ url('landing-contacto') }}"  >
        @csrf
        
        <div class="container pb-4 " >

            <label for="nombre" class="px-0" >Nombre <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text"  class="form-control" name="nombre" class='form-input text-center' placeholder="Juan" id="nombre" value= "{{old('nombre')}}" required>
                
        </div>

        <div class="container pb-4" >

            <label for="email" class="px-0" >Email <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type='email'  class="form-control" name="email" class='form-input text-center' placeholder='ejemplo@correo.com' id="email"  value= "{{old('email')}}" required>
                
        </div>

        <div class="container pb-4" >

            <label for="tema" class="px-0" >Tema <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text"  class="form-control" name="tema" class='form-input text-center' placeholder="Tema" id="tema" value= "{{old('tema')}}" required>
                
        </div>

        <div class="container pb-4" >

            <label for="mensaje" class="px-0" >Mensaje <span aria-hidden="true" class="required text-danger" >*</span></label>
            <input type="text"  class="form-control" name="mensaje" class='form-input text-center' placeholder="Escriba su mensaje aquí" style='height:300px' id="mensaje" value= "{{old('mensaje')}}" required>
                
        </div>
       
        <button type="submit" class="center btn btn-primary">Contáctanos</button>
        <br>
    </form>

</div>
<br>

</div>

<div class="background bp-4">
    
    <div class="text-center">
                <br>
                <?php
                            $string= $txt[7]['contenido'];
                            $string1 = str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $string);
                ?>
                <?php echo '<h3>'.$string1.'</h3>' ?>
                <br>
                <br>
                <br>
                
    </div>
</div>

<!--- la foto <img src="{{url('img/32.jpg')}}" alt="" width="270" height="850" alt="home photo" class="center pm-5">  -->
@endsection