<?php /* Smarty version Smarty-3.1.14, created on 2014-11-23 06:16:39
         compiled from ".\templates\headerBusq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1301254716db7d7ef18-29800280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19966931395a7073349f67f015f8ce2bd0bf278f' => 
    array (
      0 => '.\\templates\\headerBusq.tpl',
      1 => 1416704159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1301254716db7d7ef18-29800280',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54716db7d852a9_50781541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54716db7d852a9_50781541')) {function content_54716db7d852a9_50781541($_smarty_tpl) {?><!DOCTYPE html>
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
                    <li>
                        <a href="index.php?action=index">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle">M&aacute;quinas<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php?action=maquina&amp;estado=NUEVA">Nuevas</a>
                            </li>
                            <li>
                                <a href="index.php?action=maquina&amp;estado=USADA">Usadas</a>
                            </li>
                            <li>
                                <a href="index.php?action=verCrearMaq">Agregar</a>
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
                        </ul>           
                    </li>
                    <li>
                        <a href="index.php?action=turno">Turno</a>
                    </li>
                    <li>
                      <a href="#"   data-toggle="modal" data-target="#Ingresar" title="Click para ingresar. Debe estar registrado"><i class="fa fa-user"></i>Iniciar sesión</a>
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

<!--*************************************************************************************-->
<!--*************************************************************************************-->
                                <!-- Modal login -->

<div class="modal fade" id="Ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title  text-center" id="myModalLabel">Ingresar</h4>
            </div>

      <div class="modal-body">

            <form class="form-horizontal"   method="post" action="index.php?action=login">
              <fieldset>
                
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Usuario</label>
                          <div class="col-lg-10">
                            <input type="text" name="user" class="form-control" id="usuario" type="email" required>                           
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword"  class="col-lg-2 control-label" required>Contraseña</label>
                          <div class="col-lg-10">
                            <input type="password" name="pass" class="form-control" id="inputPassword" required>
                            <!-- <div id="error_login_div">
                                 <?php echo $_smarty_tpl->getSubTemplate ("error_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            </div> -->
                          </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit"  name="commit" value="Login" id="iniciar" class="btn btn-primary">Ingresar</button>
                      </div>
                    </div>
                     
                     <script src="./js/Ajax_login.js"></script>
                 </fieldset>
              </form>
               <!--  <form method="post" action="index.php?action=login">
                    <p><input type="text" name="user" value="" placeholder="Username o E-mail"></p>
                    <p><input type="password" name="pass" value="" placeholder="Password"></p>
                    <p><input type="submit" name="commit" value="Login"></p>
                </form> -->
           
        </div>   
    </div>
  </div>
</div><?php }} ?>