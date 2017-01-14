<-@foreach($pro as $cat)
<div id="gridSystemModal-{{ $pro->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <!--form class="form-horizontal" method="post"-->
          {!!Form::model($cat,['method'=>'PATCH','route'=>['inve.update',$cat->id]])!!}
               {{Form::token()}}
                    <fieldset>
                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Codigo: </label></span>
                            <div class="col-md-6">
                                <input disabled id="id" name="id" type="text" placeholder="Nombre del Producto" class="form-control" >
                                
                            </div>

                            
                            
                        </div>                
                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                            <div class="col-md-6">
                                <input id="nomProd" name="nomProd" type="text" placeholder="Nombre del Producto" class="form-control" value="{{ $pro->id }}">
                                
                            </div>

                            
                            
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Marca: </label></span>
                            <div class="col-md-6">
                                <input id="marca" name="marca" type="text" placeholder="Marca del producto" class="form-control" value="{{ $pro->nomProd }}">
                                
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Ganancia: </label></span>
                            <div class="col-md-6">
                                <input id="gan" name="gan" type="text" placeholder="porcentaje por unidad" value="" class="form-control">
                            </div>
                        </div>
                        
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Unidades: </label></span>
                            <div class="col-md-6">
                                <input id="uni" name="uni" type="text" placeholder="por caja " class="form-control">

                            </div>
                            <!--span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i-->
                        </div>
                        

                        
                        <br>
                        <div class="form-group">
                            

                            <span class="col-md-2  text-center"><label >Ganancia Caja : </label></span>
                            <div class="col-md-6">
                                <input id="gan2" name="gan2" type="text" placeholder="porcentaje por Caja" class="form-control">
                            </div>

                        </div>
                        <br>
                       <br>
                         <div class="form-group">
                            <span class="col-md-2  text-center"><label >Proveedor: </label></span>
                            <div class="col-md-6">
                                <select class=" form-control">
                             @foreach($prov as $prov)
                                
                                
                                <option  value="{{ $prov->id }}" >{{ $prov->nom }}</option>
                                
                            @endforeach
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            <div class="col-md-6">
                                <textarea rows="2" class="form-control" id="desc" name="desc" placeholder="Agregue la descripcion del producto" rows="7"></textarea>
                            </div>
                        </div>
                            <br>
                        
                    </fieldset>
                    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
                {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach()
                           



                           @foreach ($pro as $cat)
<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="Edit{{$cat->id}}"> 
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" 
        aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
              <h3 class="modal-title" align="center" style="color:#FFFFFF"><span class=""></span>Detalles de la Mascota</h3>  
      
      </div>
      {!!Form::model($cat,['method'=>'PATCH','route'=>['inve.update',$cat->id]])!!}
      <fieldset>
                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Codigo: </label></span>
                            <div class="col-md-6">
                                <input disabled id="id" name="id" type="text" placeholder="Nombre del Producto" class="form-control" >
                                
                            </div>

                            
                            
                        </div>                
                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                            <div class="col-md-6">
                                <input id="nomProd" name="nomProd" type="text" placeholder="Nombre del Producto" class="form-control" value="{{ $cat->id }}">
                                
                            </div>

                            
                            
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Marca: </label></span>
                            <div class="col-md-6">
                                <input id="marca" name="marca" type="text" placeholder="Marca del producto" class="form-control" value="{{ $cat->nomProd }}">
                                
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Ganancia: </label></span>
                            <div class="col-md-6">
                                <input id="gan" name="gan" type="text" placeholder="porcentaje por unidad" value="" class="form-control">
                            </div>
                        </div>
                        
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Unidades: </label></span>
                            <div class="col-md-6">
                                <input id="uni" name="uni" type="text" placeholder="por caja " class="form-control">

                            </div>
                            <!--span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i-->
                        </div>
                        

                        
                        <br>
                        <div class="form-group">
                            

                            <span class="col-md-2  text-center"><label >Ganancia Caja : </label></span>
                            <div class="col-md-6">
                                <input id="gan2" name="gan2" type="text" placeholder="porcentaje por Caja" class="form-control">
                            </div>

                        </div>
                        <br>
                       <br>
                         <div class="form-group">
                            <span class="col-md-2  text-center"><label >Proveedor: </label></span>
                            <div class="col-md-6">
                                <select class=" form-control">
                             
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            <div class="col-md-6">
                                <textarea rows="2" class="form-control" id="desc" name="desc" placeholder="Agregue la descripcion del producto" rows="7"></textarea>
                            </div>
                        </div>
                            <br>
                        
                    </fieldset>
                    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
     
      {!!Form::close()!!}     
        </div>
        

      
        </div>
   
  
          
   </div>


@endforeach