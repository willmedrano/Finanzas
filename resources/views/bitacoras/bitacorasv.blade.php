@extends('plantilla')
@section('content')
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



</style>

 

            <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <h1 align="center">Tabla Bitacora</h1>
                                        
                          

                    <div class="card-title-block">
                                     <div class="card-title-block">
                                           <div class="form-group" align="right">
                                                  <span class="col-md-1 col-md-offset-7 text-center"><i class="fa fa-search bigicon icon_nav"></i>Buscar</span>
                                               <div class="col-xs-4">

                                                <input  id="filtrar" name="name" type="text" class="form-control">
                                                </div>
                                                   </div> 


                                                   </div> </div>
                        <p class="title-description" align="center"> Bitacora  </p>
                    


                        
                     <section>


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        <section class="example">
                                        <div>
                                          
                                        
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                
                                                    <tr>
                                                       
                                                        <th>#</th>
                                                        <th>Descripcion</th>
                                                        <th>Fecha</th>
                                                        <th>Tiempo</th>
                                                        <th>Usuario</th>
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="buscar" id="datosprove">
                                                  @foreach($bita as $emple)
                                                   <?php
                                
                                
                                                        $date = new DateTime($emple->fecha);
                                                         ?>
                                                  
                                                    <tr>
                                                        
                                                        <td>{{ $emple->id }}</td>
                                                        <td>{{ $emple->descripcion }}</td>
                                                        <td><?php  echo $date->format('d/m/Y'); ?></td>
                                                        <td>{{ $emple->hora }} </td>
                                                         <td>{{ $emple->usuarios }} </td>
                                                        
                                                        
                                                    </tr>

                                                      @endforeach  
                                                
                                               
                                            </table>
                                            
                                            </div> 
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>
 
        
 @endsection
 @section('scripts')
    {!!Html::script('js/buscaresc.js')!!}
  @endsection
 
   
 