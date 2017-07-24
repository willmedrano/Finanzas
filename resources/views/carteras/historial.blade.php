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
    

        Historial de credito
    </h1>


                        <p class="title-description"> creditos  </p>
                    </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Datos de la Tabla de los Creditos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                                        <th>#Credito</th>
                                                        <th>proxima Fecha de pago </th>
                                                        
                                                        
                                                       
                                                        
                                                        <th>#cuotas</th>
                                                        
                                                         <th>Monto por cuota</th>
                                                        <th>Acciones</th>
                                                        
                                                         
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                <?php $total=0; $con=1; ?>
                                                     @foreach($lotes as $pro)
                                                   @if($pro->estado!=true)
                                                    <tr class="v">
                                                        
                                                        <th scope="row" ><?php echo $con;?></th>
                                                        <?php $con++;?>
                                                        <td>{{ $pro->fecha }}</td>
                                                        
                                                    
                                                        

                                                        <td>{{ $pro->cuotas }}</td>
                                                        <?php $total=$total+$pro->monto?>
                                                        <td> $ {{ $pro->monto}}</td>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        

                                                        <td>
                                                        {!!Form::open(['route'=>['pagos.show',$pro->id],'method'=>'GET'])!!}
                                                        <input type="submit" name="" value="Detalle"   class="btn btn-info btn-sm active " >
                                                        {!!Form::close()!!}   

                                                        </td>
                                                  
                                                       
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    
                                                    <tr align="center">
                                                       
                                                        <td colspan="3"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total,2)?></p></td>
                                                        <td colspan="1" ></td>
                                                       

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
 <?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0; 


  
?>
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
   
   

   $('#modal-body').on('change','#monto',function (){
//document.getElementById('prima').addEventListener('input', function()//aqui se ejecuta cuando el usuario digita le muestra la cantidad.. de producto disponible..
 
  
    c=parseFloat($("#monto").val());
    $("#cajavendertexto").val("");
    valido = document.getElementById('cajavendertexto');
        valido.innerText = "";
    max=parseFloat($("#max").val());
    min=parseFloat($("#min").val());
    
    if(isNaN(c))
    {

        $("#monto").val(min);
    

    }
    else 
        {
            if(c<min)
            {

                
                $("#monto").val(min);
                valido.innerText = "El monto debe ser mayor a: "+ min ;
                valido.style.color = 'green';

               
    
            }
            else if(c>max){
                $("#monto").val(max);
                valido.innerText = "El monto debe ser menor a: "+ max ;
                valido.style.color = 'green';
                

            }
            else {  
                    valido.innerText = "El monto es correcto";
                    valido.style.color = 'green';  
                }


                
            
        }
});



  </script>
  @endsection