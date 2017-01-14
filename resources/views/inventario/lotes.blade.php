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
    

        Inventario Disponible
    </h1>


                        <p class="title-description"> Productos  </p>
                    </div>


                        
                    <section>


                            
                                <button type="submit"  class="btn btn-primary btn-lg">Imprimir</button>
                            
                            
                        <div class="row table-responsive">
                            
                                <div class="card table-responsive">
                                    <div class="card-block table-responsive">
                                        <div class="card-title-block table-responsive">
                                            <h3 class="title">
                            
                        </h3> </div>
                                        <section class="example">
                                            <table class="table table-bordered table-hover" style="width:100%" >
                                                <thead align="center">
                                                    <tr>
                                                    
                                                        <th>Codigo</th>
                                                        <th>Nombre</th>
                                                        <th>Marca</th>
                                                        
                                                        <th>Costo Promedio</th>
                                                        
                                                        <th>Unidades Disponibles</th>
                                                        <th>Precio de venta</th>
                                                        <th>Descripcion</th>
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    
                                                    @foreach($lotes as $pro)
                                                    <tr>
                                                    <th></th>
                                                        <th scope="row" >{{ $pro->cod }}</th>
                                                        <td>{{ $pro->nomProd }}</td>
                                                        <td>{{ $pro->marca }}</td>
                                                        <td> $ {{ $pro->cPromedio}}</td>
                                                        
                                                    
                                                        

                                                        <td>{{ $pro->canlote }}</td>
                                                        <td> $ 
                                                           <?php
                                                            $a=((($pro->cPromedio)*($pro->gUni/100)))+($pro->cPromedio);
                                                            echo round($a,2);
                                                            ?>
                                                        </td>
                                                        
                                                        
                                                        
                                                        
                                                        <td>{{ $pro->desc }}</td>
                                                       
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

                          
                           

@stop()
