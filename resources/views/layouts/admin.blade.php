<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Elio Acosta">



    <title> @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- JQuery-UI CSS -->
    <link href="{{ asset('/css/JQuery-UI.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/mycss.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Foinac Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            @if (Auth::guest())
                <li class="dropdown">
                    <li><a href="{{ url('/auth/login') }}">Iniciar sesión</a></li>
                    <li><a href="{{ url('/auth/register') }}">Registrarse</a></li>
                </li>
            @elseif(Auth::user())
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-lock" aria-hidden="true"></i>  {{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('misacciones') }}"><i class="fa fa-fw fa-user"></i> Mis Acciones</a>
                    </li>
                    <li>
                        <a href="{{ url('misprestamos') }}"><i class="fa fa-fw fa-envelope"></i> Mis préstamos</a>
                    </li>
                    <li>
                        <a href="{{ url('misganancias') }}"><i class="fa fa-fw fa-gear"></i> Mis ganancias</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-fw fa-power-off"></i>Cerrar Sesión</a></li>
                </ul>
            </li>
            @endif
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="{{ url('/') }}"> Resumen financiero</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#acciones"> Acciones <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="acciones" class="collapse">
                        <li>
                            <a href="{{URL::to('acciones/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar acciones</a>
                        </li>
                        <li>
                            <a href="{{URL::to('acciones')}}"><i class="fa fa-fw fa-table"></i>Resumen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#prestamos"> Préstamos <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="prestamos" class="collapse">
                        <li>
                            <a href="{{URL::to('prestamos/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar préstamos</a>
                        </li>
                        <li>
                            <a href="{{URL::to('prestamos')}}"><i class="fa fa-fw fa-table"></i>Resumen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#pagos"> Pagos <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="pagos" class="collapse">
                        <li>
                            <a href="{{URL::to('pagos/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar pagos</a>
                        </li>
                        <li>
                            <a href="{{URL::to('pagos')}}"><i class="fa fa-fw fa-table"></i>Resumen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#interesbanco"> Interés banco <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="interesbanco" class="collapse">
                        <li>
                            <a href="{{URL::to('interesesbanco/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar interés banco</a>
                        </li>
                        <li>
                            <a href="{{URL::to('interesesbanco')}}"><i class="fa fa-fw fa-table"></i>Resumen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#gastos"> Gastos <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="gastos" class="collapse">
                        <li>
                            <a href="{{URL::to('gastos/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar gasto</a>
                        </li>
                        <li>
                            <a href="{{URL::to('gastos')}}"><i class="fa fa-fw fa-table"></i>Resumen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#ganancias"> Ganancias <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="ganancias" class="collapse">
                        <li>
                            <a href="{{URL::to('ganancias/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar ganancia</a>
                        </li>
                        <li>
                            <a href="{{URL::to('ganancias')}}"><i class="fa fa-fw fa-table"></i>Resumen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#compras"> Compra divisas <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="compras" class="collapse">
                        <li>
                            <a href="{{URL::to('comprasdivisas/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar compra divisas</a>
                        </li>
                        <li>
                            <a href="{{URL::to('comprasdivisas')}}"><i class="fa fa-fw fa-table"></i>Resumen compras</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#ventas"> Venta divisas <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="ventas" class="collapse">
                        <li>
                            <a href="{{URL::to('ventasdivisas/create')}}"><i class="fa fa-fw fa-edit"></i>Registrar venta divisas</a>
                        </li>
                        <li>
                            <a href="{{URL::to('ventasdivisas')}}"><i class="fa fa-fw fa-table"></i>Resumen ventas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#asientos"> Asientos contables <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="asientos" class="collapse">
                        <li>
                            <a href="{{URL::to('asientos')}}"><i class="fa fa-fw fa-table"></i>Asientos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#reportes"> Gráficos y reportes <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="reportes" class="collapse">
                        <li>
                            <a href="#">Gráfico...</a>
                        </li>
                        <li>
                            <a href="#">Gráfico...</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard <small>Statistics Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            @yield('content')

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"> </script>
<script src="{{asset('/js/datepicker.js')}}" ></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('/js/plugins/morris/raphael.min.js') }}"> </script>
<script src="{{ asset('/js/plugins/morris/morris.min.js') }}"> </script>
<script src="{{ asset('/js/plugins/morris/morris-data.js') }}"> </script>
@yield('scripts')



{{--<!-- jQuery -->--}}
{{--<script src="{{asset('/js/jquery-1.12.4.js')}}" ></script>--}}
{{--<script src="{{asset('/js/jquery-ui.js')}}" ></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="{{ asset('/js/bootstrap.min.js') }}"> </script>--}}

{{--<!-- DatePicker -->--}}




{{--<!-- DataTables -->--}}
{{--<script src="{{asset('/js/dataTables.min.js')}}" ></script>--}}
{{--<script src="{{ asset('/js/MyDataTables.js') }}"> </script>--}}

{{--<!-- Scripts -->--}}
{{--<script src="{{ asset('/js/vue.js') }}"> </script>--}}

{{--<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--<!--[if lt IE 9]>--}}
{{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
{{--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>--}}
{{--<![endif]-->--}}
{{--@yield('scripts')--}}
</body>

</html>

<!-- Scripts -->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->



