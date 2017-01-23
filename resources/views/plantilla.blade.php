<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COMERCIAL PERAZA</title>

    <!-- Bootstrap Core CSS -->
     {!!Html::style('vendor/bootstrap/css/bootstrap.min.css')!!} 

    <!-- MetisMenu CSS -->
     {!!Html::style('vendor/metisMenu/metisMenu.min.css')!!} 

    <!-- Custom CSS -->
     {!!Html::style('dist/css/sb-admin-2.css') !!} 

    <!-- Morris Charts CSS -->
     {!!Html::style('vendor/morrisjs/morris.css')!!} 

    <!-- Custom Fonts -->
     {!!Html::style('vendor/font-awesome/css/font-awesome.min.css')!!} 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
       
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background-color:#FFE4B5;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="#FFE4B5">SISTEMA DE FINANZAS </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
               
            
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li class="divider"></li>
                        <li><a href="/sesion"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background-color:#FFE4B5;">
                <div class="sidebar-nav navbar-collapse" style="background-color:#FFE4B5;">
                    <ul class="nav" id="side-menu" style="background-color:#FFE4B5;">
                       
                        <li>
                            <a href="/login"><i class="fa fa-dashboard"  style="background-color:#FFE4B5;"></i>Inicio</a>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Control de Proveedor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/prove/create">Ingreso de Proveedor</a>
                                </li>
                                <li>
                                    <a href="/prove">Ver  de los Proveedores</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Control de Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/inve/create">Ingreso de Producto</a>
                                </li>
                                <li>
                                    <a href="/inve">Ver los Productos</a>
                                </li>
                                <li>
                                    <a href="/lotes">Ver los Productos Disponibles</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Control de Compra<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/compra/create">Ingreso de Compra</a>
                                </li>
                                <li>
                                    <a href="/compra">Ver el Detalla de Compra</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Control de Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/clientes/create">Ingreso de Clientes</a>
                                </li>
                                <li>
                                    <a href="/clientes">Ver los Clientes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Control de Ventas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/ventas/create">Realizar Ventas</a>
                                </li>
                                <li>
                                    <a href="/ventas">Facturas</a>
                                </li>
                                <li>
                                    <a href="/lotes/create">Productos mas Vendidos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Control de Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/usuarios/create">Ingreso de Usuarios</a>
                                </li>
                                <li>
                                    <a href="/usuarios">Ver los Usuarios</a>
                                </li>
                                 <li>
                                    <a href="/bitacoras">Ver la Bitacora</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
            <div>      
       @yield('content') 
      </div>
            
        </div>
        <!-- /#page-wrapper -->
 
    </div>
    <!-- /#wrapper -->

    {!! Html::script('vendor/jquery/jquery.min.js') !!}
   <!-- Bootstrap Core JavaScript -->
    {!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}

    <!-- Metis Menu Plugin JavaScript -->
    {!! Html::script('vendor/metisMenu/metisMenu.min.js') !!}

    <!-- Morris Charts JavaScript -->
    {!! Html::script('vendor/raphael/raphael.min.js') !!}
    {!! Html::script('vendor/morrisjs/morris.min.js') !!}
    

    <!-- Custom Theme JavaScript -->
    {!! Html::script('dist/js/sb-admin-2.js') !!}
  
   @section('scripts')
       <!-- jQuery -->
   <script src="../data/morris-data.js"></script>
 
        @show

</body>

</html>