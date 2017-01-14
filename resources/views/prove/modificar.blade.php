@extends('probandos')

@section('content')
<style>
.bigicon {
    font-size: 175px;
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
.quitarborder{
 
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
 
          <form class="form-horizontal" method="post">
                    <fieldset>
                           <table class="quitarborder" style="width:100%" >
      
          
           <thead>
               <tr>
                   <th></th>
                   <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                   <th colspan="2"></th>
                   
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Nombre: </label></span></td>
                    <td colspan="3" align="center" ><input id="nomP" name="nomP" type="text" placeholder="Nombre del Producto" class="form-control" >
                    <br></td>

                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Marca: </label></span></td>
                    <td colspan="3" align="center" ><input id="nomP" name="nomP" type="text" placeholder="Marca del producto" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Ganancia: </label></span></td>
                    <td colspan="2" align="center"><input id="tipo" name="tipo" type="text" placeholder="porcentaje por unidad" class="form-control"><br></td>
                    <td colspan="2" rowspan="3" align="center"><span align="center">
                        <i class="fa fa-pencil-square-o fa-3x fa-fw bigicon" align="center"></i>
                    </span></td>
                    <td></td>
                    <td></td>
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Unidades: </label></span></td>
                    <td colspan="2" align="center" > <input id="marca" name="marca" type="text" placeholder="por caja " class="form-control"><br></td>
                    <td></td>
                    <td></td>
                  
                   
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Ganancia: </label></span></td>
                    <td colspan="2" align="center" ><input id="tipo" name="tipo" type="text" placeholder="porcentaje por Caja" class="form-control"><br></td>
                    <td></td>
                    <td></td>
                   
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Proveedor: </label></span></td>
                    <td colspan="3" align="center" ><select class=" form-control">
                            <option>Selecione un Proveedor</option>
                            <option>Vendedor</option>
                            <option>Otros</option>
                           
                        </select>
                        <br>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"> <span class="text-center" ><label >Descripción: </label></span></td>
                    <td colspan="4"><textarea rows="2" class="form-control" id="message" name="message" placeholder="Agregue la descripcion del producto" rows="7"></textarea></td>
                    <td></td>
                    <td></td>
                    
                    
               </tr>
           </tbody>
       </table>
                        
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


                    <div class="title-block ">
                        <h1 class="title">
    

        Tabla Productos
    </h1>


                        <p class="title-description"> Productos  </p>
                    </div>


                        
                    <section class="section table-responsive">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>Codigo</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        <th>Costo Promedio</th>
                                                        <th>Precio de venta</th>
                                                        <th>#Unidades Caja</th>
                                                        <th>Precio de Caja</th>
                                                        <th>Proveedor</th>
                                                        <th>Descripcion</th>
                                                        <th colspan="2" rowspan="">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                

                                                    <tr>
                                                        <th scope="row" >00000000</th>
                                                        <td>Lapiz #2</td>
                                                        <td>Facela</td>
                                                        <td>0.10</td>
                                                        <td>0.11</td>
                                                        <td>12</td>
                                                        <td>1.10</td>
                                                        <td>Libreria la paz</td>
                                                        <td>lapiz amarrillo vitrina #2</td>
                                                        <td><button type="submit"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#gridSystemModal">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-sm gris" >Desactivo</button></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" >00000001</th>
                                                        <td>Cuaderno #2</td>
                                                        <td>Facela</td>
                                                        <td>1.00</td>
                                                        <td>1.10</td>
                                                        <td>1</td>
                                                        <td>1.10</td>
                                                        <td>Libreria la paz</td>
                                                        <td>Cuaderno #2 rayado vitrina #2</td>
                                                        <td><button type="submit"  class="btn btn-info btn-sm">Modificar</button></td>
                                                        <td><button type="submit"  class="btn btn-sm btn-primary" > A c t i v o </button></td>
                                                    </tr>
                                                    
                                                    

                                                    
                                                      
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>

                          
                           

@stop
