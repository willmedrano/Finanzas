@extends('plantilla')

@section('content')
<style>
.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
thead {
     background: #ffffcc;
     border:1;

}
thead {
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


    
</style>

            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">


<!--Inicio de modal -->
               
<!--fin de modal -->
                

 <div class="title-block">
                    <span class="col-md-1  text-center">
                        <i class="fa fa-shopping-cart  bigicon"></i>
                     </span>
                        <h1 class="title">Compras</h1>
                        <p class="title-description">Tabla de Compras </p> 
                         
                           
                    </div>
                        
                    <section >


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                             <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                           <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> 


                                                   </div> 
                                                    </div>
                                        <section class="example">
                                             <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                        <th>compra</th>
                                                        <th>Tipo de Pago </th>
                                                        
                                                        <th>Fecha de Compra</th>
                                                        
                                                        
                                                        
                                                        <th>Total</th>
                                                        <th>Accion</th>
                                                         
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar">

                                                
                                                    @foreach($comp as $comps)
                                                    <tr class="v">
                                                        
                                                        <th  scope="row" >#{{ $comps->id }}</th>
                                                        <td>{{ $comps->tipopago  }}</td>
                                                        
                                                        
                                                        <?php $date = new DateTime($comps->fechacompra); ?>
                                                        <td><?php  echo $date->format('d/m/Y'); ?></td>
                                                        
                                                        <td> $ {{ $comps->montocompra}}</td>
                                                        <td>
                                    {!!Form::open(['route'=>['compra.show',$comps->id],'method'=>'GET'])!!}
                                                        <input type="submit" name="" value="Detalle"   class="btn btn-info btn-sm active " >
                                                        {!!Form::close()!!}   

                                                        </td>
                                                                                                                
                                                       
                                                    </tr>
                                                    
                                                  
                                                    
                                                    

                                                    
                                                      @endforeach
                                                </tbody>

                                            </table>
                                        </section>
                                    </div>
                                
                            </div>
                           </div>

                           </section>
                           </article>

@endsection
  @section('scripts')
    <!--{!!Html::script('js/scriptpersanalizado.js')!!}-->
    {!!Html::script('js/buscaresc.js')!!}
  @endsection

