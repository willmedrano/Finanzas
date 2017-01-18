@extends('plantilla')

@section('content')

   
               

              
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Proveedor Creado
</div>
@endif
@section('content')
  <article class="content forms-page" >
                  
 <style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
.legend{
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
.title
{
    color: #36A0FF;
}
.gris{
    background:#8c8c8c; 
    color:white;
}h2,h1
{
    color: #36A0FF;
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
      $("#ssn").mask("999-99-9999");
      $("#product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
      $("#eyescript").mask("~9.99 ~9.99 999");
      $('textarea,form').attr('autocomplete','off');
      $('input,form').attr('autocomplete','off');
   });
</script>                 

                    <div class="title-block">
                    <span class="col-md-1  text-center">
         <i class="fa fa-truck bigicon"></i>
          </span>
                        <h1 class="title">Control de Proveedores</h1>
                        <p class="title-description">Registro de Proveedores</p> 
                         
                           
                    </div>
                     
                    

                       <div class="panel panel-primary">
                            <div class="panel-heading">

                                <h1 class="panel-title">Formulario de Proveedores</h1>
                             </div>
<h2 align="center">Proveedores</h2>
                         
                            <section class="section">
                    
                                <div >
                                    <div class="card card-block sameheight-item" >

    {!! Form::open(['route'=>'prove.store','method'=>'POST']) !!}
        
        <br>
        <br>
       
        <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-user bigicon"></i>
          </span>
                <div class="col-xs-4"> 
                {!! Form::text('nom',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Proveedor','autofocus' ]) !!}
                  
                </div>
                                                   

         </div>
        <br>
        <br>
        <br>
      <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-phone-square bigicon"></i>
          </span>
                <div class="col-xs-4">
                <input type="text" name="tel" id="tel" value="" placeholder="Ingrese el Telefono del Proveedor" class="form-control" required >    
                </div>
                                                   

         </div>
<br>
<br>
<br>
        <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-credit-card  bigicon"></i>
          </span>
                <div class="col-xs-4"> 
               <input type="text" name="nit" id="nit" value="" placeholder="Ingrese el NIT" class="form-control" required >
                  
                </div>
                                                   

         </div>

<br>
<br>
<br>
                    <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="dir" name="dir" placeholder="Ingrese la Dirrecion del Proveedor" rows="2" required></textarea>
                            </div>
                        </div>

        <br>
<br>
<br>
        <br>

 <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                             {!! Form::submit('Guardar',['class'=>'btn btn-primary btn-lg']) !!}
                           
                            </div>

                            
                        </div>
       
<br>
<br>


    {!! Form::close() !!}

    </div>
    </div>

</section>
</div>
</article>



        @stop