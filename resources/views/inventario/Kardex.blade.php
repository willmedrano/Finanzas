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


                    <div class="title-block ">
                        <h1 class="title">
    

        Kardex Producto: {{ $pro->nomProd }}
    </h1>


                        <p class="title-description"> Entradas, Salidas y Exitencias  </p>
                    </div>


                        
                    <section>


                            
                                <a href="javascript:window.print();" class="btn btn-primary btn-lg">Reporte</a>
                            
                            
                        <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                            

                                                <thead align="center">
                                                <tr>
                                                        <th colspan="2">Articulo:</th>
                                                        <th colspan="3">{{ $pro->nomProd }}</th>
                                                        <th colspan="3" >Metodo:</th>
                                                        
                                                        <th colspan="3">Costo Promedio</th>
                                                </tr>
                                                <tr>
                                                        <th colspan="2"></th>
                                                        
                                                        <th colspan="3" align="center">ENTRADAS</th>
                                                        <th colspan="3" align="center">SALIDAS</th>
                                                        <th colspan="3" align="center">EXISTENCIAS</th>
                                                        
                                                </tr>
                                                
                                                    
                                                </thead>
                                                <tr>
                                                    
                                                        <th>Fecha</th>
                                                        <th>Detalle</th>
                                                        <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>
                                                         <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>
                                                         <th>cantida</th>
                                                        
                                                        <th>V/ unitario</th>
                                                        
                                                        <th>V/ Total</th>

                                                       
                                                        
                                                       
                                                    </tr>
                                                <tbody>

                                                    
                                                  <?php $total=0;
                                                    $te=0;

                                                    $vu=0;
                                                    $t=0;
                                                    $cont3=0;
                                                    $cont1=0;
                                                   ?>
                                                    @foreach($comp as $comps)
                                                    <?php 
                                                        for($cont=$cont3; $cont<count($comp2); $cont++)
                                                        {
                                                           /* while($comps->created_at > $comp2[$cont]->created_at )
                                                            {*/
                                                                if($comps->created_at > $comp2[$cont]->created_at)
                                                                {
                                                                    $cont3=$cont3+1;
                                                                    $cont1=$cont1+1;
                                                                    ?>
                                                                    
                                                                    <tr class="v">
                                                            
                                                        




                                                            <?php 
                                                        $a=($comp2[$cont]->cantidadv*$vu);
                                                            $total=$total+$a;
                                                        $t=$t-($vu*$comp2[$cont]->cantidadv);
                                                        $te=$te-$comp2[$cont]->cantidadv;
                                                        $vu=$t/$te;
                                                        ?>
                                                        <th  scope="row" ><?php echo $comp2[$cont]->fechaf; ?></th>
                                                        
                                                        <td>Por Venta #<?php echo $comp2[$cont]->id?></td>
                                                        <td></td>
                                                       
                                                        <td></td>
                                                          <td>  </td>

                                                            <th><?php echo $comp2[$cont]->cantidadv;?></th>
                                                        
                                                        <th><?php echo round($vu,2);?></th>
                                                         <th>$<?php echo round($a, 2);?></th>
                                                        
                                                        
                                                         <th><?php echo round($te,2);?></th>
                                                    
                                                        <th><?php echo round($vu,2);?></th>
                                                        
                                                        <th><?php echo round($t,2);?></th>
                    
                
                                                    </tr>


                                                        <?php 
                                                        
                                                       

                                                                }

                                                                }
                                                            
                                                        ?>
                                                    
                                                        
                                                    <tr class="v">

                                                        <?php 
                                                        
                                                        $a=($comps->cancompra*$comps->preciocomp);
                                                            $total=$total+$a;
                                                        $t=$t+($comps->preciocomp*$comps->cancompra);
                                                        $te=$te+$comps->cancompra;
                                                        $vu=$t/$te;
                                                        ?>
                                                        <th  scope="row" >{{ $comps->fechacompra }}</th>
                                                        
                                                        <td>Por Compra #{{ $comps->id}}</td>
                                                        <td>{{ $comps->cancompra}}</td>
                                                       
                                                        <td>$ {{ $comps->preciocomp}}</td>
                                                          <td> $

                                                          <?php
                                                            
                                                            echo round($a, 2);
                                                            ?></td>

                                                            <th></th>
                                                        
                                                        <th></th>
                                                         <th></th>
                                                        
                                                        
                                                         <th><?php echo $te;?></th>
                                                        
                                                        <th><?php echo round($vu,2);?></th>
                                                        
                                                        <th><?php   echo $t;?></th>
                                                        
                                                                                                                
                                                       
                                                    </tr>

                                                      @endforeach

                                                     
                                                      <?php 
                                                        for($cont=$cont1; $cont<count($comp2); $cont++)
                                                        {
                                                            ?>  

                                                            <tr class="v">
                                                            
                                                        




                                                            <?php 
                                                        $a=($comp2[$cont]->cantidadv*$vu);
                                                            $total=$total+$a;
                                                        $t=$t-($vu*$comp2[$cont]->cantidadv);
                                                        $te=$te-$comp2[$cont]->cantidadv;
                                                        $vu=$t/$te;
                                                        ?>
                                                        <th  scope="row" ><?php echo $comp2[$cont]->fechaf; ?></th>
                                                        
                                                        <td>Por Venta #<?php echo $comp2[$cont]->id?></td>
                                                        <td></td>
                                                       
                                                        <td></td>
                                                          <td>  </td>

                                                            <th><?php echo $comp2[$cont]->cantidadv?></th>
                                                        
                                                        <th><?php echo round($vu,2);?></th>
                                                         <th>$<?php echo round($a, 2);?></th>
                                                        
                                                        
                                                         <th><?php echo round($te,2);?></th>
                                                    
                                                        <th><?php echo round($vu,2);?></th>
                                                        
                                                        <th><?php echo round($t,2);?></th>
                    
                
                                                    </tr>



                                                            <?php

                                                        }
                                                        ?>
                                                </tbody>
                                            </table>
                                    
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>

                          
                           

@stop()
