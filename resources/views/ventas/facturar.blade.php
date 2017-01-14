@extends('plantilla')

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


<!--Inicio de modal -->
                <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Facturacion al Menudeo</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          <form class="form-horizontal" method="p<os></os>t">
                    <fieldset>
                        

                        <br>
                        <div class="form-group">
                            <span class="col-md-2  text-center" ><label >#factura: </label></span>
                            <div class="col-md-6">
                                <input id="nomP" name="nomP" type="text" placeholder="correlativo de la factura" class="form-control" >
                                
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
                    <div class="title-block ">
                        <h1 class="title">
    

        Facturacion Pendiente
    </h1>


                        <p class="title-description"> Ventas  </p>
                    </div>


                        
                    <section class="section table-responsive">


                            
                                
                            
                            
                        <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        <section class="example">
                                            <table class="table  table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning" align="center">
                                            <th align="center" colspan="1" ># venta</th>
                                            <th align="center" >producto</th>
                                            <th align="center">cantidad</th>
                                            <th align="center" >precio</th>
                                            <th align="center" >Subtotal</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
  <tr align="center">
  <td colspan="3">Total</td>

  <td colspan="1" >$ 200</td>
  <td colspan="1" align="left"></td>
  


  </tr>
  </tfoot>
                                    <tbody>
                                        
                                        <tr align="center">
                                        <td>1</td>
                                            <td>producto 2</td>
                                            <td>40</td>
                                            <td>5</td>
                                            <td>$ 200</td>
                                            
                                        </tr>
                                    </tbody>
                                                     </table>
                                            <div align="center"> <button type="submit"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal">Facturar</button> </div>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>

                          
                           

@stop()
