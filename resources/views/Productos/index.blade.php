@extends('plantilla')
              
@section('content')
                           
<style type="text/css" >
    
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
.legend{
    color: #36A0FF;
}
.title
{
    color: #36A0FF;
}
.title{
  font-size: 25px;  
}
 .title-description{
   font-size: 15px;   
 }  
 .formatoTabla {
   
} 
h2,h1,span
{
    color: #36A0FF;
    font-size: 15px; 
}

</style>



  
            
 <div class="title-block ">
                        <h1 class="title">
    

        PRODUCTO MÁS VENDIDO
    </h1>


                        <p class="title-description"> Productos  </p>
                    </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Datos de la Tabla de los Productos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                                        <th>Codigo</th>
                                                        <th>Producto </th>
                                                        
                                                        <th>Cantidad Vendida</th>
                                                        <th>sub-total</th>
                                                        
                                                        
                                                         
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                <?php $total=0 ?>
                                                    @foreach($productor as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >{{ $comps->id }}</th>
                                                        <td>{{ $comps->nomProd}} </td>
                                                      <td>{{ $comps->gUni  }}

                                                      </td>
                                                      <td>$ {{ $comps->cPromedio}}</td>
                                                          
                                                      
                                                          <?php
                                                            $a=($comps->cPromedio);
                                                            $total=$total+$a;
                                                            ?>
                                                            
                    
                
                                                    </tr>
               
                                                      @endforeach
                                                </tbody>
                                                <tfoot>
                                                    
                                                    <tr align="center">
                                                       
                                                        <td colspan="3"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total,2)?></p></td>
                                                       

                                                    </tr>
                                                
                                                </tfoot>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           

 

@endsection
  @section('scripts')
  

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
   @endsection