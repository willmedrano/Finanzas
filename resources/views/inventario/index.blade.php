@extends('plantilla')
<?php $message=Session::get('message')?>

@if($message=='update')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong> Sea Actualizado con exito el registro</strong>
</div>
@endif
@section('content')
<style>
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
thead{
     background: #ffffcc;
     border:1;

}

h2,h1,span
{
    color: #36A0FF;

}
.gris{
    background:#8c8c8c; 
    color:white;
}


    
</style>

            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">

@foreach ($pro as $cat3)
 <div id="gridSystemModal3{{$cat3->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">ACTIVAR PRODUCTO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          {!!Form::model($cat3,['method'=>'PATCH','route'=>['inve.update',$cat3->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del producto?</label>
              <input type="hidden" name="hi" value="{{ $cat3->estado }}">
              <input type="hidden" name="hi2" value="2">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach()
@foreach ($pro as $cat2)
<div id="gridSystemModal2{{$cat2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3" >Desactivar PRODUCTO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
           {!!Form::model($cat2,['method'=>'PATCH','route'=>['inve.update',$cat2->id]])!!}
              <label for="">¿Seguro que desea cambiar el estado del producto?</label>
              <input type="hidden" name="hi" value="{{ $cat2->estado }}">
              <input type="hidden" name="hi2" value="3">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
          {!!Form::close()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach ()

@foreach ($pro as $cat)
<div  id="Edit{{$cat->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
      {!!Form::model($cat,['method'=>'PATCH','route'=>['inve.update',$cat->id]])!!}
      <fieldset>
      <input type="hidden" name="hi2" value="1">
                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Codigo: </label></span>
                            <div class="col-md-6">
                                <input disabled id="id" name="id" type="text" placeholder="Nombre del Producto" class="form-control" value="{{ $cat->cod }}">
                                
                            </div>

                            
                            
                        </div>                
                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                            <div class="col-md-6">
                                <input required id="nomProd" name="nomProd" type="text" placeholder="Nombre del Producto" class="form-control" value="{{ $cat->nomProd }}">

                                
                            </div>

                            
                            
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Marca: </label></span>
                            <div class="col-md-6">
                                <input required id="marca" name="marca" type="text" placeholder="Marca del producto" class="form-control" value="{{ $cat->marca }}">
                                
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Ganancia: </label></span>
                            <div class="col-md-6">
                                <input required id="gUni" name="gUni" type="text" placeholder="porcentaje por unidad" class="form-control" value="{{ $cat->gUni }}">
                            </div>
                        </div>
                        
<br>
                        
                        

                        
                        
                       
                       <br>
                         <div class="form-group">
                            <span class="col-md-2  text-center"><label >Proveedor: </label></span>
                            <div class="col-md-6">
                                <select class=" form-control" name="idProve">
                             @foreach($prov as $prove)
                                
                                <option  value="{{ $prove->id }}" >{{ $prove->nom }}</option>
                                
                                
                                

                            @endforeach
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            <div class="col-md-6">
                                <textarea required rows="2" class="form-control" id="desc" name="desc" placeholder="Agregue la descripcion del producto" rows="7" >{{   $cat->desc }}</textarea>
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


@endforeach
<!-- fin del modal-->

                        

             





                    <div class="title-block ">
                        <h1 class="title">
    

        Tabla Productos
    </h1>


                        <p class="title-description"> Productos  </p>
                    </div>


                        
                    <section class="section table-responsive">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                     <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input  id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> 


                                                   </div> </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                    <th> </th>
                                                        <th>   Codigo</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        <th>Costo Promedio</th>
                                                                                                          
                                                        
                                                        
                                                        
                                                        <th>%Ganancias</th>
                                                        
                                                        <th>Precio de venta</th>
                                                        <th>Proveedor</th>
                                                        <th>Descripcion</th>
                                                        <th colspan="1" rowspan="">Accion</th>
                                                        <th colspan="1" rowspan="">Estado</th>
                                                        <th></th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody id="hola">
                                                    @foreach($pro as $pro)
                                                

                                                    <tr>
                                                    <td> </td> 
                                                        <td>{{ $pro->cod }}</td>
                                                        <td>{{ $pro->nomProd }}</td>
                                                        <td>{{ $pro->marca }}</td>
                                                        <td> $  <?php echo round($pro->cPromedio, 2);
                                                            ?>
                                                        </td>
                                                        
                                                        
                                                            
                                                            <td> % {{ $pro->gUni}}</td>
                                                        <td> $ 
                                                           <?php
                                                            $a=((($pro->cPromedio)*($pro->gUni/100)))+($pro->cPromedio);
                                                            echo round($a,2);
                                                            ?>
                                                        </td>
                                                        
                                                        
                                                        
                                                                    <td>{{ $pro->nom }}</td>
                                                                
                                                        
                                                        <td>{{ $pro->desc }}</td>
                                                        
                                                        <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $pro->id }}" data-toggle="modal" data-target="#Edit{{ $pro->id }}">Modificar</a>



                                                        </td>
                                                         @if($pro->estado==true)
                                                            <td><button type="submit"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal2{{$pro->id}}">A c t i v o</button></td>
                                                        @endif

                                                        @if($pro->estado==false)
                                                            <td><button type="submit"  class="btn btn-sm gris" data-toggle="modal" data-target="#gridSystemModal3{{$pro->id}}">Desactivo</button></td>
                                                        @endif
                                                        <td></td>

                                                       
                                                    </tr>
                                                  
                                                    
                                                    

                                                    
                                                      @endforeach

                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                       





                           </section>
                           </article>

                           

@stop()
