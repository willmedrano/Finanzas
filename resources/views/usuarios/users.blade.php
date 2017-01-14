  <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                
                                                    <tr>
                                                       
                                                        <th>Id</th>
                                                        <th>Nombre</th>
                                                        <th>Correo</th>
                                                        
                                              
                                                        <th colspan="2" align="center">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($users as $emple)
                                                  
                                                  

                                                    <tr>
                                                        
                                                        <td>{{ $emple->id }}</td>
                                                        <td>{{ $emple->name }}</td>
                                                        <td>{{ $emple->email }}</td>
                                                          <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $emple->id }}" data-toggle="modal" data-target="#Edit{{ $emple->id }}">Modificar</a>

                
                                                           </td>
                                                        
                                                    </tr>

                                                      @endforeach  
                                                
                                               
                                            </table>
                                            {!! $users->render() !!} 