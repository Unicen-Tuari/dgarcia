<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 11:42:20
         compiled from ".\templates\headerBusqEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2457554757cdddc62b5-94744266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32acfabbcebff2554cc677186775d5d24611d61' => 
    array (
      0 => '.\\templates\\headerBusqEvento.tpl',
      1 => 1416998491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2457554757cdddc62b5-94744266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54757cddde79a0_51813330',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54757cddde79a0_51813330')) {function content_54757cddde79a0_51813330($_smarty_tpl) {?><!DOCTYPE html>
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
                        <a href="index.php?action=index"><small>Inicio</small></a>
                    </li>
                    <li>
                        <a href="index.php?action=resenia"><small>La Empresa</small></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"><small>M&aacute;quinas</small>
                                <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php?action=maquina&amp;estado=NUEVA"><small>Nuevas</small></a>
                            </li>
                            <li>
                                <a href="index.php?action=maquina&amp;estado=USADA"><small>Usadas</small></a>
                            </li>
                        </ul>           
                    </li>
                    <li>
                        <a href="index.php?action=evento"><small>Eventos</small></a>
                    </li>
                    <?php if ((isset($_smarty_tpl->tpl_vars['usuario']->value))){?>
                    <li>
                        <a href="index.php?action=turno"><small>Turno</small></a>
                    </li>
                    <?php }?>
                    <li>
                        <a href="index.php?action=contacto"><small>Contacto</small></a>
                    </li>
                    <?php if ((!isset($_smarty_tpl->tpl_vars['usuario']->value))){?>
                    <li>
                      <a href="#"   data-toggle="modal" data-target="#Ingresar" title="Click para ingresar. Debe estar registrado"><i class="fa fa-user"></i><small>Iniciar sesión</small></a>
                    </li>
                    <li> 
                      <a href="#" title="Click para registrarse y comenzar a utilizar la aplicacion" data-toggle="modal" data-target="#Registrarse"><i class="fa fa-sign-in fa-1x"></i><small>Registrarse</small></a>
                    </li>
                    <?php }else{ ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"><small><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</small><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php?action=logout"><small>Salir</small></a>
                            </li>
                        </ul>           
                    </li>                        
                    <?php }?>  
                </ul>                 
            </div>
            <!-- /.navbar-collapse -->

            <form class = "busqueda" id="formBusquedaE" method="POST">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <input id = "tipeoUser" name = "inputBuscarE" placeholder = 'Buscar...'>
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

            <form class="form-horizontal"   method="POST" action="index.php?action=login">
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
        </div>   
    </div>
  </div>
</div>

<!--*************************************************************************************-->
<!--*************************************************************************************-->
                            <!-- Modal Registrarse -->
<!-- 
<button type="button" class="close" action="index.php?action=logout" ><span aria-hidden="true">&times;</span><span class="sr-only">Logout</span></button>
 -->
 
<div class="modal fade" id="Registrarse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Registrarse</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal"  action="index.php" method="post">
        <fieldset>
            <legend>Ingrese todo los datos requeridos.</legend>
              <div class="form-group">
                  <label for="inputUsuario" class="col-lg-2 control-label" required>Usuario</label>
                  <div class="col-lg-10">
                    <input type="text" name="usuario_registrarse" class="form-control" id="usuario" placeholder="se utilizará para loguearse" required>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputNombre" class="col-lg-2 control-label" required>Nombres</label>
                  <div class="col-lg-10">
                    <input type="text" name="nombre_registrarse" class="form-control" id="nombre" placeholder="" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="apellido" class="col-lg-2 control-label" required>Apellido</label>
                <div class="col-lg-10">
                  <input type="text" name="apellido_registrarse" class="form-control" id="apellido" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                  <label for="inputDocumento" class="col-lg-2 control-label">Documento</label>
                  <div class="col-lg-10">
                    <input type="text" name="dni_registrarse"  class="form-control" id="inputDocumento" placeholder="D.N.I" required>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputFechaNacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                  <div class="col-lg-10">
                    <input type="text" name="FechaNacimiento"  class="form-control" id="inputFechaNacimiento" placeholder="Día/Mes/Año" >
                  </div>
              </div>
              <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-10">
                      <input type="email" name="email_registrarse" class="form-control" id="inputEmail"  placeholder="EJ: Minombre@gmail.com"  required>
                    </div>
              </div>
              <div class="form-group">
                    <label for="inputCelular" class="col-lg-2 control-label">Teléfono 
                    celular</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Celular_registrarse" class="form-control" id="inputCelular" placeholder="XXXX-XXXXXXXXX" >
                    </div>
               </div>
              <div class="form-group">
                    <label for="inputTelefonoFijo" class="col-lg-2 control-label">Teléfono fíjo</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Telefono_fijo_registrarse" class="form-control" id="inputTelefonoFijo" placeholder="XXXX-XXXXXXX">
                    </div>
               </div>

              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Dirección</label>
                     <div class="col-lg-10">
                         <input type="text" name="Direccion_registrarse"  class="form-control" id="inputEmail" value=" " required>
                    </div>
              </div>

              <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                   <div class="col-lg-10">
                          <input type="password" name="pass_registrarse" class="form-control" id="inputPassword" placeholder="Contraseña" required >
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                  </div>
              </div>
         </fieldset>  
      </form>
      </div>

    </div>
  </div>
</div><?php }} ?>