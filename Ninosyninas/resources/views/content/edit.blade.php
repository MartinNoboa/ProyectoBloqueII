@extends('layouts.main-landing')

@section('header')



<form action="{{ url('/contenido/'.$contenido->id) }}" method="post">

    @csrf 
    {{ method_field('POST') }}
    <!---
    <br>
    <div class='container'><a class="btn btn-outline-primary p-2 m-2" href="{{url('/contenido')}}">Regresar a editar contenido</a></div>
    -->
    
        <div class="d-flex align-items-center justify-content-center flex-column">
            <div class="p-4 w-50 bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
                <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center"><h1>Editar</h1></h1>
                <hr>
                <div class="contact-form row pb-4">
                    <div class="form-group pb-4 col-lg-12" >
                        <div class="form-group pb-4" >  
                            <label for="nombre" class="px-0" >Contenido <span aria-hidden="true" class="required text-danger" >*</span></label>
                           
                            <textarea  type="text" class="form-control" name="contenido" id="contenido" height="400rem"   required>{{$contenido->contenido}}</textarea>
                        </div>
                    </div>
                    <div class="px-4">
                            <input type="submit" class="btn btn-primary w-100 mt-4" value="Editar contenido">
                    </div>
                    <div class="px-4">
                            <a href="{{url('/contenido')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
                    </div>
                    
                </div>
            </div>
        
        </div>
 </div>




</form>


@endsection

