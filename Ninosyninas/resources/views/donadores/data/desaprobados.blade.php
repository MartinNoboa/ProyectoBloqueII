
            @foreach($desaprobados as $donador)
            <tr scope="row">
                @php
                    $nombre= App\Models\Donadores::find($donador->id)
                @endphp
                <td>{{ $nombre['nombreCompleto'] }}</td>
                <td>{{ $donador->email }}</td>
                <td>{{ $donador->telefono }}</td>            
                <td>
                <a href="{{ url('/donadores/'.$donador->id.'/show') }}">
                
                            <button type="button" class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                <i class="far fa-eye"></i>
                            </button>      
                </a>
                <a href="{{ url('/donadores/'.$donador->id.'/edit') }}">
                
                              <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>      
                </a>
                

                <form action="{{ url('/donadores/'.$donador->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}

                <!--<button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')" value="Borrar">Borrar</button>-->

                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger my-1 d-flex justify-content-center align-items-center" 

                    value="Borrar"><i class="bi bi-trash"></i>
                                
                    </button>

                    <!-- Modal desaprobados-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
   