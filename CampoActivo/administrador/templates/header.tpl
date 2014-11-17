<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campo Activo S.A</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Campo Activo S.A</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li>
                        <a href="index.php?action=index">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php?action=resenia">La Empresa</a>
                    </li> -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle">M&aacute;quinas
                                <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php?action=maquina&amp;estado=N">Nuevas</a>
                            </li>
                            <li>
                                <a href="index.php?action=maquina&amp;estado=U">Usadas</a>
                            </li>
                            <li>
                                <a href="index.php?action=maquina&amp;agregarM">Agregar</a>
                            </li>
                            <li>
                                <a href="index.php?action=maquina&amp;modificarM">Modificar</a>
                            </li>
                            <li>
                                <a href="index.php?action=maquina&amp;eliminarM">Eliminar</a>
                            </li>
                        </ul>           
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle">Evento
                                <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php?action=evento">Eventos</a>
                            </li>
                            <li>
                                <a href="index.php?action=verCrearEvento">Agregar</a>
                            </li>
                            <li>
                                <a href="index.php?action=verModificarE">Modificar</a>
                            </li>
                            <li>
                                <a href="index.php?action=eliminarE">Eliminar</a>
                            </li>
                        </ul>           
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle">Turno
                                <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php?action=turno&amp;agregarT">Agregar</a>
                            </li>
                            <li>
                                <a href="index.php?action=turno&amp;eliminarE">Eliminar</a>
                            </li>
                        </ul>           
                    </li>
                    <!-- <li>
                        <a href="index.php?action=turno">Turno</a>
                    </li> -->
                    <li>
                        <a href="index.php?action=contacto">Contacto</a>
                    </li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <form class = "busqueda" action = "index.php">
                <input type = "hidden" name  = "action" value = "resultado">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <input id = "tipeoUser" name = "q">
                    </div>
                    <div class="col-sm-2 text-center">
                        <button class = "btn btn-primary" type = "submit" value = "B&uacute;squeda">
                            <i class="fa fa-search-plus"></i>
                            <span>Búsqueda</span>
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <p id = "cantResultados">0 Resultados</p>
                    </div>   
                </div>          
            </form>
        </div>
        <!-- /.container -->   

    </nav>

    <div class="brand">
        <div id ='logo'>
            <img src="img/logo.png" width="250" height="120"  alt=""/><br>
        </div>
    </div>
        
    <div class="address-bar">Ruta 3 KM 299,2 | CP 7300 | Azul, Buenos Aires| 02281-427465</div>