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
h2,h1,span
{
    color: #36A0FF;

}
.title{
  font-size: 25px;  
}
 .title-description{
   font-size: 0px;   
 } 
 .gris{
    background:#8c8c8c; 
    color:white;
}  
#div1 {
    overflow:scroll;
    height:200px;
    width: 270px;
}

#div1 table {
    
}

</style>
 <!-- width:500px;  Este es opcional si se lo pongo a la tabla es para que aparesca horizontal el sroll-->
               
 <article class="content forms-page">         
                   
                        
               
              
    

        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <h1 class="panel-title">Sistema</h1>
            </div>

                <h2 align="center">Sistema</h2>
                    
                    <section class="section"> 
                        
                        <div>
                            
                            <div class="card card-block sameheight-item">
          
                                <div class="row">
                                    <!--page header-->
                                    
                                    <div class="col-lg-12">
                                        
                                       
                                         <img src="/imag/Sistema de finanzas.png" alt="Smile" height="800" width="800"> 
                                    </div>
                                    <!--end page header-->
                                </div>
                                <br>
                                <br>
                              
                              
                               
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            @stop()