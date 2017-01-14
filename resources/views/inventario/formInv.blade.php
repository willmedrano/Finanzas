@extends('plantilla')
<?php $message=Session::get('message')?>

@if($message=='store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Producto Guardado
</div>
@endif

@section('content')

         
    
<style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
legend{
    color: #36A0FF;
}
h2
{
    color: #36A0FF;
}

    
</style>







                <article class="content forms-page">
                    <div class="title-block">
                    <span class=""><i class="fa fa-archive bigicon icon_nav" > Inventario</i></span>
                        <h2 >
        
    </h2>
                        <p class="title-description"> Registro de Producto </p>
                    </div>
            <!--<div class="subtitle-block">
                        <h3 class="subtitle">
        Formulario de Producto
    </h3> </div>-->
                    <section class="section">
                        <div class="row sameheight-container">
                            <div >
                                <div class=\ >
                                    

                       


                
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title">Formulario de producto</h1>

                             </div>
                             <div align="center">
                             <h2 align="center"> Producto </h2> 
                             <br>
</div>
                 {!! Form::open(['route'=>'inve.store','method'=>'POST','class'=>'form-horizontal']) !!}
                
                    <fieldset>
                        

                        <div class="form-group">
            
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-barcode bigicon icon_nav" ></i></span >
                                                      <div class="col-md-3">

                                <input id="cod" name="cod" type="text" placeholder="Codigo del Barra" required autocomplete="off" class="form-control" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-book bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="nom" name="nom" type="text" placeholder="Nombre del Producto" required class="form-control">
                                
                            </div>

                            
                        
                        </div>

                        
<br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-tags bigicon"></i></span>
                            <div class="col-md-3">
                                <input id="marca" required name="marca" type="text" required placeholder="Marca" class="form-control" >
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa  bigicon" style=" font-weight: bold;">%</i></span>
                            <div class="col-xs-3">
                                <input id="gUni"
                                 name="gUni" type="text" placeholder="porcentaje de ganancia por unidad" pattern="[0-9]{1,3}"  class="form-control" required="">
                            </div>

                            
                            

                        </div>
                        <br>
                        
                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-truck bigicon"></i></span>
                            <div class="col-xs-3">
                                <select class=" form-control" name="idProve">
                            
                             @foreach($prov as $prov)

                                <option  value="{{ $prov->id }}" >{{ $prov->nom }}</option>
                            @endforeach
                           
                        </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-7">
                                <textarea rows="2" class="form-control" id="desc" name="desc" placeholder="Agregue la descripcion del producto" rows="7" required=></textarea>
                            </div>
                        </div>
                            <br>
                        <div class="form-group">
                            <div class="col-md-12 text-center" align="center">
                                <button type="submit"  class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                        </div>
                    </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>
</section> 
</article>
@stop