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
 <div id="gridSystemModal2{{$pro->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header alert-warning" bgcolor="blue">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" >
          <i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
        </span>
          <h4 class="modal-title" id="gridModalLabel3" >Registar pago</h4>

      </div>

      <div class="modal-body" id="modal-body">

        <div class="container-fluid bd-example-row">

          {!!Form::model($pro,['method'=>'PATCH','route'=>['pagos.update',$pro->id]])!!}
          
              
              <input type="hidden" name="hi" value="{{ $pro->estado }}">
              <input type="hidden" name="hi2" value="3">
              <br>
              <div class="form-group">

                  <span class="col-md-2  text-center" ><label >Monto: </label></span>
                    
                    <div class="col-md-6" id="mo">
                        
                        <input  readonly="" id="monto" name="monto" type="text" placeholder="monto a pagar"    class="form-control" value="{{ $pro->monto }}" >
                        <span id="cajavendertexto"></span>
                        <input type="hidden" id="max" name="max" value="{{ $pro->pendiente }}">
                        <input type="hidden" id="min" name="min" value="{{ $pro->monto }}">

                                
                    </div>  
              </div> 
              <br><br><br>

              <div class="form-group">

                  <span class="col-md-2  text-center" ><label >Mora: </label></span>

                    <div class="col-md-6">
                        <?php
                        $fp=$pro->fecha;
                        $fa=dameFecha(date("Y-m-d"),0);
                        $mor=0;
                        
                        while($fp<$fa) { 
                                //echo $fa;
                                $fp =date("Y-m-d", strtotime("$fp +1 month"));
                                $mor=$mor+($pro->monto*0.10);
                                
                                
                        }
                        
                        ?>


                      <input  id="mora" readonly name="mora" type="text" placeholder="" class="form-control" value="<?php echo $mor; ?>" readonly="">


                    </div>
              </div>
              <br><br>

              <div class="form-group">

                <span class="col-md-2  text-center" ><label >Fecha: </label></span>
                    
                  <div class="col-md-6">
                      
                    

                      <input id="fecha" name="fecha" type="date" readonly placeholder="% de descuento" class="form-control" value="<?php echo dameFecha(date("Y-m-d"),0);?>" > 

                  </div>
              </div>
              <br><br>

              <div class="form-group">

                <span class="col-md-2  text-center" ><label >Total: </label></span>

                  <div class="col-md-6">
                            
                    <input readonly id="total" name="total" type="text" placeholder="" class="form-control" value="<?php echo ($pro->monto+$mor)?>">
                               
                  </div>
              </div>
              <br>
              <br>

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
                        <h1 class="title">
    

        Pagar Cuota
    </h1>


                        <p class="title-description"> cuotas  </p>
                    </div>
<div align="center">
<button type="submit"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#gridSystemModal2{{$pro->id}}">Realizar Pago</button>
</div>
<br><br>
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
                                                        <th>Numero de cuota</th>
                                                        <th>Fecha Cancelacion </th>
                                                        
                                                        <th>Monto por Cuota</th>
                                                        <th>Mora Pagada</th>
                                                        <th>Total pagado</th>
                                                        
                                                       
                                                        
                                                        
                                                         
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                <?php $total=0; $total2=0; $total3=0; $cont=1; ?>
                                                      @foreach($lotes as $pro2)
                                                   
                                                    <tr class="v">
                                                        
                                                        <th scope="row" ><?php echo $cont; ?></th>
                                                        <?php $cont++?>
                                                        <td>{{ $pro2->fecha }}</td>
                                                        
                                                        <td> $ {{ $pro2->monto}}</td>
                                                        <td> $ {{ $pro2->mora}}</td>
                                                        <td>{{ $pro2->total }}</td>
                                                        <?php $total=$total+$pro2->total;?>
                                                          <?php $total2=$total2+$pro2->mora;?>
                                                          <?php $total3=$total3+$pro2->monto;?>
                                                    </tr>
                                                    
                                                   @endforeach 
                                                </tbody>
                                                <tfoot>
                                                    
                                                    <tr align="center">
                                                       
                                                        <td colspan="2"><p style="font-weight: bold;">Total</p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total3,2);?></p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total2,2);?></p></td>
                                                        <td colspan="1" ><p style="font-weight: bold;"><?php echo round($total,2);?></p></td>
                                                       

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