
            @if ($users->count())
                @foreach($users as $user)
                <tr scope="row">
                    @php
                        $nombre= App\Models\users::find($user->id)
                    @endphp
                    <td class="fs-6 text-wrap">{{ $nombre['nombreCompleto'] }}</td>
                    <td class="fs-6 text-wrap">{{ $user->fecha_nacimiento}}</td>
                    <td class="fs-6 text-wrap">{{ $user->ocupacion}}</td>
                    <td class="fs-6 text-wrap">{{ $user->telefono}}</td>
                    <td class="fs-6 text-wrap">{{ $user->mail}}</td>
                    <td>
                    <a href="{{ url('/registrar-usuario/'.$user->id.'/see ') }}">
                        <button type="button" class="btn btn-primary my-1 d-flex justify-content-center align-items-center">
                                    <i class="far fa-eye"></i>
                        </button>      
                    </a>

                        <a href="{{ url('/usuario/'.$user->id.'/edit') }}">
                            <button type="button" class="btn btn-success my-1 d-flex justify-content-center align-items-center">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </a>
                <form action="{{ url('/usuario/'.$user->id) }}" method="post">
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
                    
                </tr>
                
               
                   
                    </td>
                    </form>
                @endforeach
                        @else
                        <div>
                        <h2>No hay usuarios disponibles</h2>
                        </div>
                    
                @endif
                
                
