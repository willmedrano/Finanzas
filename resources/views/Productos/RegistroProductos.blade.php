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



 
                <article class="content forms-page" >
 
<!--    <div id="msj-error1" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong id="msj1"></strong> 
    </div>
    <div id="msj-error2" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong id="msj2"></strong> 
    </div>
    <div id="msj-error3" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong id="msj3"></strong> 
    </div>-->
                   
                    <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-home bigicon"></i>
                     </span>
                        <h1 class="title">Productos</h1>
                        
                         
                           
                    </div>

                   


    
                       <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de Productos</h1>
                             </div>
<h1 align="center">Productos</h1>
                <section class="section">
                    
                       <div >
                                   <div class="card card-block sameheight-item" >
 {!! Form::open(['route'=>'producto.store','method'=>'POST','class'=>'form-horizontal']) !!}
                                            <br>           
                                            <br>

                                            <div class="form-group">

                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-home bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="nompro" name="nompro" type="text" placeholder="Ingrese el nombre del producto" class="form-control" required > 
                                                </div>
                                               

                                            </div>
                                            <br>
                                      <div class="form-group">
                                              <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-user bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                                   <input id="nomdirec" name="nomdirec" type="text" placeholder="Ingrese el nombre del director" class="form-control" required> 
                                                </div>  
                                        </div>
                                           <br>
                                         <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 text-center">
                                                    <i class="fa fa-phone-square bigicon"></i>
                                                </span>
                                                <div class="col-xs-4"> 
                                               
                                                 <input id="telesc" name="telesc" type="tel" name="telefono" placeholder="Ingrese el Telefono de la escuela" class="form-control" required> 
                                                
                                                </div> 
                                        </div>
                                        <br>
                                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="diresc" name="diresc" placeholder="Direccion de la escuela" rows="2" required></textarea>
                            </div>
                        </div>
                                       
                                           <br>
                                         
                              
                                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                               <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>

                            </div>

                            
                        </div>

                                           
                                       {!! Form::close() !!}
                                    </div>




                              </div>
                        
 
                     
                    </section>

                    </div>

@endsection
 