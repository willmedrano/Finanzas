@extends('plantilla')

<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Clientes Guardado
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

  .thumb{
     height: 300px;
     border: 1px solid #000;
     margin: 10px 5px 0 0;
}  
</style>
   {!!Html::script('js/jquery-1.9.0.min.js')!!}
  {!!Html::script('js/jquery.maskedinput.js')!!}
 <script type="text/javascript">
jQuery(function($) {
      $.mask.definitions['~']='[+-]';
      $('#date').mask('99/99/9999',{placeholder:"mm/dd/yyyy"});
      $('#tel').mask('9999-9999');
      $('#nit').mask("9999-999999-999-9");
      $("#tin").mask("99-9999999");
      $("#dui").mask("99999999-9");
      $("#ssn").mask("999-99-9999");
      $("#product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
      $("#eyescript").mask("~9.99 ~9.99 999");
      $('textarea,form').attr('autocomplete','off');
      $('input,form').attr('autocomplete','off');
   });
</script> 
               

                <article class="content forms-page" >
                  
                   
                    <div class="title-block">
                        <h1 class="title">Clientes</h1>
                        <p class="title-description"> Registro de Clientes </p> 
                         
                           
                    </div>
                      
                    {!!Html::script('js/jquery-1.9.0.min.js')!!}
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Registro de Clienetes</h1>
                             </div>

                            <section class="section">
                    
                                <div>
                                    <div class="card card-block sameheight-item" >
                                    
                                     

                                        <div class="form-horizontal">
                                      
                    
                                {!! Form::open(array('route'=>'clientes.store', 'method' => 'post','files'=>true) )!!}

                                            <br>
                                            <div class="form-group">
                                            <div class="form-group col-xs-12" align="center" >
                                            <img src="assets/faces/3.jpg"  alt="Foto"  style="width:160px;height:160px;" id="fotografia_usuario" >
                                            <output id="list"></output>
                                            <br>
                                            <input type="file" id="f" name="f" style="visibility:hidden;" />

                                            <input type="file" id="files" name="files" required/>
                                            </div>
                                           </div>
                                            <br>
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-user bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="fname" name="nombreE" type="text"  placeholder="Ingrese nombres" class="form-control" required>
                                                </div>

                                                <div class="col-xs-4" align="left">
                                                    <input id="fname" name="apeEmp" type="text" placeholder="Ingrese apellidos" class="form-control" required >
                                                </div>
                                            </div>
                                            <br>
                  
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                 <i class="fa fa-credit-card bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="dui" name="dui" type="text" placeholder="Dui" class="form-control" required>
                                                </div>

                                                <div class="col-xs-4" align="left">
                                                    <input name="nit" id="nit"  type="text" placeholder="NIT" class="form-control" required>
                                                </div>

                                            </div>
                                            <br>             
    
                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-calendar bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="nac" name="Fnac" type="date" placeholder="Fecha de Nacimiento " class="form-control"  required data-toggle="tooltip" title="Fecha de Registro">

                                                    <input id="fcontrato" required name="fcontrato" type="hidden" value="<?php echo dameFecha(date("Y-m-d"),0);?>">
                                                 </div>
                                                 <div class="col-xs-4" align="left">
                                                    <input name="ing" id="ing"  type="text" placeholder="Ingreso Mensual" class="form-control" required>
                                                </div>

                                            </div>
                                            <br>  

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-phone-square bigicon"></i>
                                                </span>

                                                <div class="col-xs-4">
                                                    <input id="tel" name="tel1" type="text" placeholder="Telefono " class="form-control" required="">
                                                </div>

                                                 

                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-users bigicon icon_nav"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                    <select class="form-control" name="sexo">
                                                        
                                                        <option>Masculino</option>
                                                        <option>Femenino</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                      
                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-pencil-square-o bigicon"></i>
                                                </span>
                                                <div class="col-md-8">
                                                     <textarea class="form-control" id="message" name="dir" placeholder="Direccion" rows="2" required></textarea>
                                                </div>
                                            </div>
                                            
                                            <br>

                                            <div class="form-group">
                                                <div class="col-md-12 text-center" align="center">
                                                    <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                                                </div>                  
                                            </div>
                                            </div>
                                                
                                            </div>
                  
                                     {!! Form::close() !!}
                                </div>
                            </div>
 
                        </div>
                    </section>
  
@stop
<?php 
$time=time();
    
    function dameFecha($fecha,$dia){
        list($year,$mon,$day)=explode('-',$fecha);
        return date('Y-m-d',mktime(0,0,0,$mon,$day+$dia,$year));    
    }
   $total=0; 


  
?>
@section('scripts')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

function archivo(evt) {

      var files = evt.target.files; // FileList object
        
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
       
           var reader = new FileReader();
           
           reader.onload = (function(theFile) {
               return function(e) {
             document.getElementById("fotografia_usuario").style.display='none';
               // Creamos la imagen.
                      document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '" style="width:160px;height:160px;"/>'].join('');
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
      document.getElementById('files').addEventListener('change', archivo, false);

</script>
{!! Html::script('js/script3.js') !!}

 @endsection

