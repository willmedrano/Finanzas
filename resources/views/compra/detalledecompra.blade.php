@extends('plantilla')

@section('content')
<style>
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
thead {
     background: #ffffcc;
     border:1;

}
thead {
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


<!--Inicio de modal -->
                <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <form class="form-horizontal" method="post">
                    <fieldset>
                        

                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >Nombre: </label></span>
                            <div class="col-md-6">
                                <input id="nomP" name="nomP" type="text" placeholder="Nombre del Producto" class="form-control" >
                                
                            </div>

                            
                            
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Marca: </label></span>
                            <div class="col-md-5">
                                <input id="nomP" name="nomP" type="text" placeholder="Marca del producto" class="form-control">
                                
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Ganancia: </label></span>
                            <div class="col-xs-5">
                                <input id="tipo" name="tipo" type="text" placeholder="porcentaje por unidad" class="form-control">
                            </div>
                        </div>
                        
<br>
                        <div class="form-group">
                            <span class="col-md-2  text-center"><label >Unidades: </label></span>
                            <div class="col-md-3">
                                <input id="marca" name="marca" type="text" placeholder="por caja " class="form-control">

                            </div>
                            <span class="col-md-5  text-center"  ><i class="fa fa-pencil-square-o fa-3x fa-fw bigicon"></i>
                        </div>
                        

                        
                        <br>
                        <div class="form-group">
                            

                            <span class="col-md-2  text-center"><label >Ganancia: </label></span>
                            <div class="col-xs-5">
                                <input id="tipo" name="tipo" type="text" placeholder="porcentaje por Caja" class="form-control">
                            </div>

                        </div>
                        <br>
                        
                         <div class="form-group">
                            <span class="col-md-2  text-center"><label >Proveedor: </label></span>
                            <div class="col-xs-7">
                                <select class=" form-control">
                            <option>--Selecione un Proveedor--</option>
                            <option>Vendedor</option>
                            <option>Otros</option>
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-2 text-center"><label >Descripción:</label></span>
                            <div class="col-md-7">
                                <textarea rows="2" class="form-control" id="message" name="message" placeholder="Agregue la descripcion del producto" rows="7"></textarea>
                            </div>
                        </div>
                            <br>
                        
                    </fieldset>
                </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!--fin de modal -->
                

 <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-shopping-cart  bigicon"></i>
                     </span>
                        <h1 class="title">Detalle de Compras</h1>
                        <p class="title-description">Detalle de Compras </p> 
                         
                           
                    </div>
                        
                    <section >


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                             <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                           <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> 


                                                   </div> 
                                                    </div>
                                        <section class="example">
                                             <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>compra</th>
                                                        <th>Compras Realizadas</th>
                                                        <th>cantidad</th>
                                                        <th>Precio</th>
                                                        <th>Tipo de Pago </th>
                                                        <th>Total</th>
                                                        <th>Descripcion</th>
                                                         
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                
                                                    @foreach($comp as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >compra #{{ $comps->id }}</th>
                                                        <td>{{ $comps->nomProd  }}</td>
                                                        <td>{{ $comps->cancompra}}</td>
                                                        <td>{{ $comps->preciocomp}}</td>
                                                        <td>{{ $comps->tipopago}}</td>
                                                        <td>{{ $comps->montocompra}}</td>
                                                        <?php $date = new DateTime($comps->fechacompra); ?>
                                                        <td><?php  echo $date->format('d/m/Y'); ?></td>
                                                        
            
                                                                                                                
                                                       
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

@endsection
  @section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    {!!Html::script('js/buscaresc.js')!!}
  @endsection

