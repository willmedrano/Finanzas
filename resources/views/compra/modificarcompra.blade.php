@extends('plantilla')

@section('content')

       <!-- Core CSS - Include with every page -->
    
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
.quitarborder{
 
    color:white;
}

.formatoTabla {
    
    font-size: 16px;
    text-align: center;
   }
    

</style>
 {!! Html::script('js/vendor.js') !!}
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">

@foreach ($cuota as $cat2)
<div id="gridSystemModal2{{$cat2->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-warning" bgcolor="blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel3" >Registar pago</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid bd-example-row">

          {!!Form::model($cat2,['method'=>'PATCH','route'=>['cuotas.update',$cat2->id]])!!}
          
              
              <input type="hidden" name="hi" value="{{ $cat2->estadcuota }}">
              <input type="hidden" name="hi2" value="3">
              <br>
              <div class="form-group">

                            <span class="col-md-2  text-center" ><label >Compra: </label></span>
                            <div class="col-md-6">
                                <input disabled id="id" name="id" type="text" placeholder="" class="form-control" value="compra#{{ $cat2->idcompsc }}">
                                
                            </div>  
                        </div> 
                        <br>
              <div class="form-group">

                            <span class="col-md-2  text-center" ><label >Cuota: </label></span>
                            <div class="col-md-6">
                                <input disabled id="id" name="id" type="text" placeholder="" class="form-control" value="cuota#{{ $cat2->id}}">
                                
                            </div>
                        </div>
                        <br>
              <div class="form-group">

                            <span class="col-md-2  text-center" ><label >Fecha: </label></span>
                            <div class="col-md-6">
                            <?php $date = new DateTime($cat2->fechcouta);  ?>
                                <input disabled id="id" name="id" type="text" placeholder="" class="form-control" value="<?php  echo $date->format('d/m/Y'); ?>">
                               
                                          
                            </div>
                        </div>
<br>

<div class="form-group">

                            <span class="col-md-2  text-center" ><label >monto: </label></span>
                            <div class="col-md-6">
                            
                                <input disabled id="id" name="id" type="text" placeholder="" class="form-control" value="{{ $cat2->cuotas}}">
                               
                                          
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
@endforeach ()

                    <div class="title-block">
                     <span class="col-md-1  text-center">
         <i class="fa fa-home bigicon"></i>
          </span>

                        <h1 class="title">
    

        Tabla de Compras apagar
    </h1>


                        <p class="title-description"> Compras apagar </p>
                    </div>


                        
                    <section class="section">


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row">
                            
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input id="fname" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> </div>
                                        <div class="table-responsive" align="center" >
                             <br>
                                            <table class="table table-bordered table-hover" style="width:100%" >

                                    <thead valign="bottom" align="right" >
                                        <tr  class="warning formatoTabla">
                                            <th align="center" class="">cuota</th>
                                            <th align="center">fecha de pago</th>
                                  
                                            <th align="center" >monto</th>
                                            <th align="center" >mora</th>
                                            <th align="center" >Estado</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          
                                         <?php $v=0; ?>
                                          @foreach($cuota as $aux2)
                                          <?php
                                           $v++;  
                                           $date = new DateTime($aux2->fechcouta);
                                          ?>
                                        <tr align="center">
                                            <td>cuota #{{ $aux2->id }}</td>
                                            
                                            <td> <?php  echo $date->format('d/m/Y'); ?></td>
                                            <td>{{ $aux2->cuotas }}</td>
                                            <td>{{ $aux2->morac }}</td>
                                            </td>
                                                        @if($aux2->estadcuota==false)
                                                            <td><button type="submit"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal2{{$aux2->id}}">P a g o</button></td>
                                                        @endif

                                                        @if($aux2->estadcuota==true)
                                                            <td>cancelado</td>
                                                        @endif    
                                            
                                        </tr>
                                          @endforeach
                                    </tbody>
                                                     </table>
                                                            
                                        </div>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>
   
               






  
@stop