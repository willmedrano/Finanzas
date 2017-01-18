@extends('plantilla')
<?php $message=Session::get('message')?>
<div class='notifications top-left'></div>
@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Compra Realizada.
</div>
@endif
 

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
#content{
  position: absolute;
  min-height: 50%;
  width: 80%;
  top: 20%;
  left: 5%;
 }

 .selected{
  cursor: pointer;
 }
 .selected:hover{
  background-color: #0585C0;
  color: white;
 }
 .seleccionada{
  background-color: #0585C0;
  color: white;
 }
</style>
  
               <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3">Advertencia PRODUCTO</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">
          
              <label for="">El producto esta desactivo</label>
              <input type="hidden" name="hi">
              <input type="hidden" name="hi2" value="2">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    
                </div>
        
        </div>
      </div>
      
    </div>
  </div>
</div>

                <article class="content forms-page" >
                  
                   
                    <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-shopping-cart  bigicon"></i>
                     </span>
                        <h1 class="title">Compras</h1>
                        <p class="title-description">Registro de Compras </p> 
                         
                           
                    </div>
                      
                    


        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="panel-title">Formulario de Compras</h1>
            </div>
            <h2 align="center">Compras</h2>
            <section class="section"> 
                <div>
                <div class="card card-block sameheight-item" >
                
                {!! Form::open(['route'=>'aux2.store','method'=>'POST','class'=>'form-horizontal' ,'id'=>'frm1','name'=>'frm1']) !!}
                     
                        <br><br>
                        <div class="form-group" id="aux">

                            <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-barcode bigicon"></i>
                            </span>
                            <div class="col-xs-3"> 
                             <input id="idcodproduc" name="idcodproduc" type="text" placeholder="Codigo de barra" class="form-control" autofocus> 
                            </div>
                        </div>
                        <br> 

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i>
                            </span>
                            <div class="col-md-3">
                            <input   id="nomproducto" name="nomproducto1" required type="text" disabled="" placeholder="Nombre del Producto" class="form-control">
                            </div>
                            <span class="col-md-1  text-center">
                           <i class="fa fa-truck bigicon"></i>
                            </span>
                            <div class="col-md-3">
                               <select disabled class=" form-control" name="idProve" id="idProve">
                            <option>--Selecione un Proveedor--</option>
                            @foreach($prov as $prov1)

                                <option  value="{{ $prov1->id }}" >{{ $prov1->nom }}</option>
                            @endforeach
                           
                        </select> 
                            </div>
                        </div>
                              <input type="hidden"  name="hprod" id="hprod" value="">
                                            <br>
                                              
                                                   
                    
                   
                   
                     
                   
                    <div class="form-group"  >

                        <span class="col-md-1 col-md-offset-2 text-center">
                            <i class="fa fa-shopping-cart bigicon"></i></span>

                      <div class="col-xs-3">
                      <input id="cantcomp" name="cantcomp" type="text" required placeholder="cantidad a comprar" required class="form-control" onkeyup="sumar();">
                      </div>
                      <span class="col-md-1  text-center"><i class="fa fa-dollar bigicon"></i></span>
                      <div class="col-xs-3">
                      <input id="preciocomp" name="preciocomp" type="text" placeholder="Precio de compra unitario" class="form-control"  required onkeyup="sumar();">
                      </div>
                      
                      </div>
                      <br>  

                      <div class="form-group">
                      <span class="col-md-1 col-md-offset-2 text-center">
                      <i class="fa fa-dollar (alias) bigicon"></i>
                      </span>

                     <div class="col-xs-3">
                     <input id="subtotalcomp" name="subtotalcomp" type="text" placeholder="subtotal" class="form-control" disabled="true">
                     </div>
                     <span class="col-md-1  text-center"><i class="fa fa-percent bigicon"></i></span>
                      <div class="col-xs-3">
                      <input id="descompra" name="descompra" type="hidden" placeholder="Precio de compra unitario" value="0"  class="form-control" onkeyup="sumar();">
                      </div>
                     </div>
                     <br>
                     <div class="form-group" align="center">
                     <input type="submit" id="bt_add" href="#" class="btn btn-info" value="Agregar al carrito">
                     </div>
                     {!! Form::close() !!}
                     <div class="form-group">                       
                      <div class="col-md-12" >
                      <div class="panel-body"> 
                                              
                            <div class="table-responsive" align="center" >
                             <br>
                                
                                <table id="tabla" name="tabla" class="table table-bordered">
                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning">
                                       
                                            <th align="center" >#</th>
                                            <th align="center" >codigo</th>
                                            <th align="center" >producto</th>
                                            <th align="center">cantidad</th>
                                            <th align="center" >precio</th>
                                            <th align="center" >descuento</th>
                                            <th align="center" >subtotal</th>
                                            <th align="center" >accion</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="hola">
                                                    <?php $cont=0; $p=0?>
                                                    @foreach($aux as $aux2)
                                                    

                                                    <tr>

                                                        <td><?php $cont++;  echo $cont; ?></td>
                                                        <td>{{ $aux2->cod }}</td>
                                                        <td>{{ $aux2->nomProd }}</td>
                                                        <td>{{ $aux2->preciocomp2 }}</td>
                                                        <td>{{ $aux2->cancompra2 }}</td>
                                                        <td>{{ $aux2->descompra2}}</td>
                                                        <td>
                                                           <?php
                                                           $d=$aux2->descompra2 / 100;
                                                            $b=$d * ($aux2->cancompra2*$aux2->preciocomp2);
                                                            $a=($aux2->cancompra2*$aux2->preciocomp2) - $b;
                                                            $iva=($p+$a)*0.13;
                                                            $p=$p+$a;
                                                            
                                                            echo $a;
                                                            ?>
                                                        </td>
                                                                                                                
                                                        <td>
                                    {!!Form::open(['route'=>['aux2.destroy',$aux2->id],'method'=>'DELETE'])!!}
                                                        <input type="submit" name="elimina" value="Eliminar"   class="btn btn-danger active " >
                                                        {!!Form::close()!!}   

                                                        </td>
                                                         
                                                       
                                                    </tr>
                                                  
                                                  
                                                      @endforeach

                                                </tbody>
 
                                   
                                                     </table>
                                                     
                                                             <nav align="right">
                                                                 <ul class="pagination" align="right">
                                                                    <li class="disabled">
                                                    <a href="#" aria-label="Previous">
                                                <span  class="disabled" >&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                    </a>
                                                     </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                                     <li><a href="#">2</a></li>
                                                                     <li><a href="#">3</a></li>
                                                                     <li><a href="#">4</a></li>
                                                                     <li><a href="#">5</a></li>
                                                                   
                                                                     <li>
                                                    <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Previous</span>
                                                </a>
                                                                     </li>
                                                                 </ul>
                                                             </nav>
                                                        
                                                </div>
                                                </div>
                                                </div>
                                            </div>
                                            {!! Form::open(['route'=>'compra.store','method'=>'POST','class'=>'form-horizontal','id'=>'frm2','name'=>'frm2']) !!}
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-money bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                 
                                                    <select class="form-control" name="formap" id="formap" onclick ="seleccionTipopago();">
                                                        <option value="Contado" selected="true">Contado</option>
                                                           
                                                    </select>
                                            
                                                </div>
                                                <div class="form-group">

                        <span class="col-md-1 text-center">
                            <i class="fa fa-calendar bigicon"></i></span>
                            <div class="col-xs-3">
                            <input id="fechacompra" name="fechacompra" type="date" class="form-control" value="<?php echo dameFecha(date("Y-m-d"),0);?>" ></div>
                    </div>
                                               </div> 
                                            <br>
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-usd bigicon"></i>
                                                </span>
                                                <div class="col-xs-3">
                                                    
                                                  <input id="totalpagar" name="totalpagar" type="text" placeholder="Total apagar" disabled="true" class="form-control" value="<?php echo $p;?>">
                                                  <input id="total" name="total" type="hidden" placeholder="Total apagar" class="form-control" value="<?php echo $p;?>">

                                            
                                                 
                                                </div>
                                                   <span class="col-md-1  text-center"><i class="bigicon"style=" font-weight: bold;">IVA</i></span>
                                                  <div class="col-xs-3">
                                                 
                                             <input id="IVA" name="IVA" type="text" placeholder="IVA A Pagar" class="form-control" disabled = 'true' value="<?php echo $p*0.13;?>" >
                                               </div>
                                                </div>

                                            <br>
                                            <div class="form-group">

                                           
                                                  <div class="col-xs-3">
                                                 
                                             <input id="cuotas" name="cuotas" type="hidden" placeholder="Numero de cuotas" class="form-control" onkeyup="cuotasapagar();">
                                               <input required type="hidden" name="ncuotas" id="ncuotas" value="1">
                                               </div>

                                            
                                                <div class="col-xs-3">
                                                    
                                                  
                                                  <input id="montocouta" name="montocouta" type="hidden" placeholder="cuotas monto" class="form-control" disabled = 'true' value="<?php echo $p;?>">
                                                   <input type="hidden" name="ppcuotas" id="ppcuotas" >
                                            
                                                 
                                                </div>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <div class="col-md-12 text-center" align="center">
                                                    <button type="submit"  class="btn btn-lg btn-primary ">Guardar</button>
                                                </div>                  
                                            </div>
                  
                                  {!! Form::close() !!}
                                </div>
                            </div>
 
                        </div>
                    </section>
  
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



<script type="text/javascript" charset="utf-8">
function sumar()
{
var a=document.frm1.cantcomp.value;
var b=document.frm1.preciocomp.value;
var c=(parseFloat(a)*parseFloat(b)).toFixed(4);
var d=document.frm1.descompra.value;
var e=parseFloat(d);
var f=0;
if(isNaN(a)){
   a=1;
  }
  if(isNaN(b)){
   b=1;
  }
    c= a*b;
  if(isNaN(c)){
   c=1;
  }
  if(isNaN(e)){
   e=0;
  }
  
   f=-((e/100)*c) + c;
   if(isNaN(f)){
   f=0;
  }
 document.frm1.subtotalcomp.value=f.toFixed(2);
}
function cuotasapagar()
{
var a=document.frm2.totalpagar.value;

var b=document.frm2.cuotas.value;


var c=(parseFloat(a) / parseFloat(b)).toFixed(2);

if(isNaN(c)){
   c=1;
  }
if(isNaN(a)){
   a=1;
  }
  if(isNaN(b)){
   b=1;
  }
  
  
 document.frm2.montocouta.value=c;
 //alert(document.frm2.cantotal.value);
 //alert(c.toFixed(2));
}

$(document).ready(function(){
$('#aux').on('change','#idcodproduc',function (){
  
  var producto=$("#idcodproduc").val();

     var ruta="/llenadoProducto/"+producto;

 $.get(ruta, function(res){
  $(res).each(function(key,value){
    if (value.estado==true) {
       $("#hprod").val(value.id);
       $("#nomproducto").val(value.nomProd);
       $("#idProve").val(value.idProve);
       
       }
      else{
        $("#hprod").val("");
       $("#nomproducto").val("");
       $("#idProve").val(0);
       $("#myModal").modal()

      }

      });
  
 });
});
  
 });
 
  function seleccionTipopago() {
           
          var posicion=document.getElementById('formap').options.selectedIndex; //posicion
          var j=document.getElementById('formap').options[posicion].text; //valor
          


            if(j=="Credito"){
            v="";
              document.frm2.cuotas.disabled = false;//Aqui es para que si lo pueda editar
              document.frm2.ppcuotas.value=document.frm2.montocouta.value;
             //$('#cuotas').prop("required", true);//aqui le asigna que este campo es requerido
             //input_form.setAttribute("type", "password");
            $("#cuotas").val("");

            document.frm2.ncuotas.value=document.frm2.cuotas.value;
          
            document.frm2.ppcuotas.value=document.frm2.montocouta.value;
            }
           if(j=="Contado")
           {
                   document.frm2.cuotas.disabled = true;// esto es para que no se pueda editar
                  $("#cuotas").val(""+1);
                  document.frm2.montocouta.value=document.frm2.total.value;
                
                  document.frm2.ppcuotas.value= document.frm2.montocouta.value;

                  var a=document.frm2.total.value;
                  document.frm2.ncuotas.value=1;
           // $('#cuotas').removeAttr("required");// quitarle de que es requerido
           }
           

            
                                                      
        }
 



 
function enter(){
      //var char= event.which || event.keyCode;
      var producto=$("#idcodproduc").val();
      
      //var producto=$("");/escuela/"+btn.value+"/edit"
     var ruta="/llenadoProducto/"+producto;


     $.get(ruta,function(res){
           //producto.empty();
      $(res).each(function(key,value){
       //producto.append("<input type='text'  id='"+value.id+"' value="+value.nombre+">");
      $("#nomproducto").val(value.nomProd);
     //$("#nomdirec").val(res.nomdirec);
     // $("#telesc").val(res.telesc);
    //$("#diresc").val(res.diresc);
      });
     });
      
    }
</script>
 @endsection