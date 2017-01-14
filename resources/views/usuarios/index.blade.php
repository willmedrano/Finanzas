@extends('plantilla')

<?php $message=Session::get('message')?>

@if($message=='update')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Exito!!</strong> Usuarios Modificado
</div>
@endif


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





<!--Inicio de modal -->
@foreach ($users as $cat)
                <div class="modal fade" id="Edit{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;" >&times;</span></button>
        <span class="col-md-2  text-center" style="color: white;" ><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></span>
<h4 class="modal-title" id="gridModalLabel">Modificar Usuarios</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">
                <div id="notificacion_resul_fci"></div>
 

             {!!Form::model($cat,['method'=>'PATCH','route'=>['usuarios.update',$cat->id]])!!}
                                                
                                  
                    <fieldset>
                     <input type="hidden" name="hi2" value="1">
                           <table class="quitarborder" style="width:100%" >
      
          
           <thead>
               <tr>
                   <th></th>
                   <th ></th>
                    <th ></th>
                    <th ></th>
                    <th ></th>
                   <th colspan="2"></th>

                   
               </tr>
           </thead>


              <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Nombre: </label></span></td>
                    <td colspan="2.5" align="center" >
                    <input id="name" name="name" type="text" placeholder="Nombre" value="{{ $cat->name }}" class="form-control" required="">
                    <br></td>
                      <td><label ></label></span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
               <tr>
                   
                    <td align="right" nowrap="nowrap" >
                    <span class="text-center" ><label >Correo:</label></span></td>
                    <td  align="center" ><input id="email" name="email" type="text" value="{{ $cat->email }}"  placeholder="Apellido" class="form-control" required>
                    <br></td>
                      
                    <td></td>
                    <td></td>
                    <td></td>
                
               </tr>
                <tr>
                   <td align="right" nowrap="nowrap"><span class="text-center" ><label >Password: </label></span></td>
                    <td colspan="2" align="center"><input id="password" name="password" type="password" value="" placeholder="" class="form-control" required><br></td>

                    <td></td>
                    <td></td>
                    <td></td>
                   
               </tr>
                
                   
                
         
       </table>
                        
                    </fieldset>
                    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
       <!-- <button type="button" class="btn btn-primary">Guardar</button> -->
        <button type="submit" class="btn btn-primary">Guardar</button>

              
                                     {!! Form::close() !!}
        </div>
      

      
      </div>
    </div>
  </div>
</div>
@endforeach
<!--fin de modal -->
    

        Tabla usuarios
    </h1>


                        <p class="title-description"> Usuarios  </p>
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
                                                       
                                                        <th>Id</th>
                                                        <th>Nombre</th>
                                                        <th>Correo</th>
                                                        
                                              
                                                        <th colspan="2" align="center">Acciones</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($users as $emple)
                                                  
                                                  

                                                    <tr>
                                                        
                                                        <td>{{ $emple->id }}</td>
                                                        <td>{{ $emple->name }}</td>
                                                        <td>{{ $emple->email }}</td>
                                                          <td><a href="#"   class="btn btn-info btn-sm" data-id="{{ $emple->id }}" data-toggle="modal" data-target="#Edit{{ $emple->id }}">Modificar</a>

                
                                                           </td>
                                                        
                                                    </tr>

                                                      @endforeach  
                                                
                                               
                                            </table>
                                            
                                           
                                        </section>
                                    </div>
                                
                            </div>
                           </div>
                           </section>
                           </article>
 
        
 @endsection
@section('scripts')
   
 <script>
  $(document).on('click', '.pagination a', function(e){
    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];
     //var ruta=$(this).attr('href').split('page=')[0];
    console.log(page);
    var ruta = "http://localhost:9090/usuarios";
      //var route = ruta;
     $.ajax({
      url: ruta,
      data: {page: page},
      type: 'GET',
      dataType: 'json',   
      success: function(data){
        $(".users").html(data);
      }
     });
  });
 </script> 


 @endsection