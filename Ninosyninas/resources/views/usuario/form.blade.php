
    <h1>{{($modo)}} usuario</h1>

    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">

    <ul>
        @foreach($errors->all() as $error)
              <li>  {{($error)}} </li>
        @endforeach
    </ul>
        </div>    
    @endif



    <div class="container mt">

    <div class="form-group">

        <label for="Nombre">Nombre </label>
        <input type="text" class="form-control" name="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre:'' }}" id="Nombre">
        <br>

    </div>

    <div class="form-group">

    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control"  name="ApellidoMaterno" value="{{ isset($usuario->ApellidoMaterno)?$usuario->ApellidoMaterno:'' }}"  id="ApellidoMaterno">
    <br>

    </div>

    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control"  name="ApellidoPaterno" value="{{ isset($usuario->ApellidoPaterno)?$usuario->ApellidoPaterno:'' }}" id="ApellidoPaterno">
    <br>

    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control"  name="Telefono"  id="Telefono" value="{{ isset($usuario->Telefono)?$usuario->Telefono:'' }}" id="Telefono">
    <br>

    <label for="FechaContratacion">Fecha de Contratacion</label>
    <input type="date" class="form-control"  name="FechaContratacion" value="{{ isset($usuario->FechaContratacion)?$usuario->FechaContratacion:'' }}" id="FechaContratacion">
    <br>

    <label for="FechaNacimiento">Fecha de Nacimiento</label>
    <input type="date" class="form-control"  name="FechaNacimiento" value="{{ isset($usuario->FechaNacimiento)?$usuario->FechaNacimiento:'' }}" id="FechaNacimiento">
    <br>

    <label for="Email">Correo</label>
    <input type="text" class="form-control"  name="Email" value="{{ isset($usuario->Email)?$usuario->Email:'' }}" id="Email">
    <br>



    <input type="submit" class="btn btn-primary" value="{{($modo)}} datos">

    <a href="{{url('usuario/')}}" class="btn btn-success">Regresar</a>
    </div>

    
    

    <br>