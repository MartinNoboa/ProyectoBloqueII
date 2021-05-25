


    
    @foreach($children as $key)
        <tr scope="row">
            @php
                $nombre= App\Models\Children::find($key->id);
            @endphp
            <td class="fs-6 text-wrap">{{ $key->nombre }}</td>
            <td class="fs-6 text-wrap">{{ $key->apellido_materno }}</td>
            <td class="fs-6 text-wrap">{{ $key->apellido_paterno }}</td>
            <td class="fs-6 text-wrap">{{ $key->fecha_nacimiento}}</td>
            <td class="fs-6 text-wrap">{{ $key->grado}}</td>
            <td class="fs-6 text-wrap">{{ round($key->promedio,2)}}</td>
           
            <td>

                <a href="{{ url('/registrar-ninos/'.$key->id.'/see ') }}">

                        <button type="button" class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                    <i class="far fa-eye"></i>
                        </button>      
                </a>


                <a href="{{ url('/ninos/'.$key->id.'/edit') }}">
                    
                    <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                       <i class="bi bi-pencil-square"></i>
                   </button>      
                </a>
           
                <form action="{{ url('/ninos/'.$key->id) }}" method="post" >
                
                    @csrf
                    {{ method_field('DELETE')}}

                    <button type="button" data-toggle="modal" data-target="#exampleModal{{$key->id }}" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" 
                         value="Borrar"><i class="bi bi-trash"></i>         
                     </button>

                    <!--Inicio modal-->
                    <div class="modal fade" id="exampleModal{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de eliminar?</h5>
                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn button-donar">Eliminar</button>
                                </div>
                            </div>
                            
                        </div>  
                    </div>
                
                </form>
            </td>
        </tr>
    @endforeach



