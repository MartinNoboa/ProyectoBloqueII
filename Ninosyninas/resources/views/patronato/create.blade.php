@extends('layouts.main-landing')

@section('header')



<form action="{{ url('/patronato/registrar') }}" method="post">

    @csrf 
        <div class="d-flex align-items-center justify-content-center flex-column">
            <div class="p-4 w-50 bg-light container my-5 shadow p-3 mb-5 bg-body rounded">
                <h1 class="fs-1 my-3 d-flex align-items-center justify-content-center"><h1>Registrar un vocal</h1></h1>
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
                <div class="contact-form row pb-4">
                    <input  type="hidden" id="rol"  name="rol" value="Vocal">
                    <div class="form-group pb-4" >
                        <label for="nombre" class="px-0">Nombre completo <span aria-hidden="true" class="required text-danger" >*</span></label>
                        <br><br>
                        <input type="text" class="form-control" name="nombre" placeholder="Juan López"  id="nombre" name="nombre" required>
                            
                    </div>
                    <div class="form-group pb-4 col-lg-12" >
                        <div class="form-group pb-4" >  
                            <label for="información" class="px-0" >Información <span aria-hidden="true" class="required text-danger" >*</span></label>
                            <br><br>
                            <textarea  type="text" class="form-control" name="informacion" id="informacion" height="400rem" required placeholder="Información del puesto"></textarea>
                        </div>
                    </div>
                    <div class="px-4">
                            <input type="submit" class="btn btn-primary w-100 mt-4" value="Registrar vocal">
                    </div>
                    <div class="px-4">
                            <a href="{{url('/patronato')}}" class="btn bg-danger w-100 mt-4 text-white">Regresar</a>
                    </div>
                    
                </div>
            </div>
        
        </div>
 </div>




</form>


@endsection

