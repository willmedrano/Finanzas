@extends('plantilla')

            
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Usuario Creado
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

 <article class="content forms-page" >               

                    <div class="title-block">
                    <span class="col-md-1  text-center">
         <i class="fa fa-user bigicon"></i>
          </span>
                        <h1 class="title">Control de Usuarios</h1>
                        <p class="title-description">Registro de Usuarios</p> 
                         
                           
                    </div>
               

                       <div class="panel panel-primary">
                            <div class="panel-heading">
                         
                                <h1 class="panel-title">Formulario de Usuarios</h1>
                             </div>
                                <h2 align="center">Usuario</h2>
                         
                            <section class="section">
                    
                                <div >
                                    <div class="card card-block sameheight-item" >

    {!! Form::open(['route'=>'usuarios.store','method'=>'POST']) !!}
        
        <br>
        <br>
        <input type="hidden" name="" value="">
        <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-user bigicon"></i>
          </span>
                <div class="col-xs-4"> 
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Usuario','autofocus' ]) !!}
                  
                </div>
                                                   

         </div>
        <br>
        <br>
        <br>
      <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-google-plus bigicon"></i>
          </span>
                <div class="col-xs-4">
                <p>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electronico"  required> 
                <span id="emailOK"></span>
                </p>   
                </div>
                                                   

         </div>
<br>
<br>
<br>
        <div class="form-group">

        <span class="col-md-1 col-md-offset-2 text-center">
         <i class="fa fa-unlock bigicon"></i>
          </span>
                <div class="col-xs-4"> 
                <p>
               <input type="password" name="contra1" id="contra1" value="" placeholder="Ingrese la cotraseña" class="form-control" required >
                    <span id="contra11"></span>
                </p>
                </div>
                                    
         </div>

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
@endsection
@section('scripts')
<script type="text/javascript" charset="utf-8">

var a="";
var b="";
    document.getElementById('email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "El correo ingresado es valido";
        valido.style.color = 'green';
    } else {
      valido.innerText = "Incorrecto no cumple los requisitos";
        valido.style.color = 'red';
    }
});

</script>
@endsection