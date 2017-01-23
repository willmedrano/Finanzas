<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Clietes</title>
<style>
.bigicon { 
    font-size: 35px;
    color: #36A0FF;
} 
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #008080;
    color: white;
}


h2,h1,span
{
    color: #36A0FF;

}
.gris{
    background:#8c8c8c; 
    color:white;
}
.title {
 font-size: 26px;
 }
p.serif {
    font-family: "Times New Roman", Times, serif;
     font-size: 11px;
     text-align: right;
}

td.sansserif {
    font-family: Arial, Helvetica, sans-serif;
     font-size: 10px;
     text-align: left;
     
 

}
 body{
      font-family: sans-serif;
    }
    @page {
      margin: 90px 50px;
    }
    
   
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }

</style>
</head>
<body>
<div class="col-md-12">
  <div class="box-body">
    <div class="box-header with-border">
    <div id="header">
      
    
      <table width="556" border="" align="" cellpadding="10">
        <tr>
          <td align="left"><img class="al" src="" width="125px" height="125px"></td>

          <td width="456" align="center" colspan="5">
         
          <h3 class="title">COMERCIAL PERAZA</h3>
          <h5>REPORTE DE CLIENTES</h5>

           <article>
             
          
           <p class="serif"><strong>Fecha :</strong><?=  $date; ?></p>
            <p class="serif"><strong>Impresión :</strong> <?=  $date1; ?></p>
           </article>
            </td>
          <td>&nbsp;</td>
        </tr>
         </tr>
        
        
    </table>
  </div>
  </div><!-- /.box-header -->
  <div class="box-body">
     <table id="t01">
     <thead align="center">
     <tr>
    <th>Nombres</th>
     <th>Apellidos</th>
     <th>DUI</th>
     <th>NIT</th>
     <th>Telefono</th>
     </tr>
     </thead>
      <tbody >
     @foreach($detalle as $emple)
     <?php
         $date = new DateTime($emple->NacEmp);
     ?>

      <tr>
       <td class="sansserif">{{ $emple->nomEmp }}</td>
        <td class="sansserif">{{ $emple->apeEmp }}</td>
        <td class="sansserif">{{ $emple->DUIEmp }}</td>
        <td class="sansserif">{{ $emple->NITEmp }}</td>
        <td class="sansserif">{{ $emple->telEmp }}</td>
                                                       
         </tr>
       @endforeach  
      </tbody>
    </table>
    <footer>
    <table border="0">
      <tr>
        <td>
            <p class="izq">
              <!-- Aqui podemos poner un te-->
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  </div><!-- /.box-body -->
</div><!-- /.box -->


</div>



</body>
</html>