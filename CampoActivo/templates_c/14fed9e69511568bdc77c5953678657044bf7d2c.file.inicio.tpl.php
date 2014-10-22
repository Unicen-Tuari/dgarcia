<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 23:19:55
         compiled from ".\templates\inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262515439c3e20f9187-97593212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14fed9e69511568bdc77c5953678657044bf7d2c' => 
    array (
      0 => '.\\templates\\inicio.tpl',
      1 => 1413321592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262515439c3e20f9187-97593212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5439c3e2136667_36882696',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439c3e2136667_36882696')) {function content_5439c3e2136667_36882696($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <!-- <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol> -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-6.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-8.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Bienvenido a </small>
                    </h2>
                    <h1 class="brand-name">Campo Activo S.A</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>
                            <strong>LA EMPRESA QUE LO PONE MOTOR AL CAMPO</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center"><strong>New Holland. Especialista en su éxito.</strong>
                        </h2>
                    <hr><br>
                    <img class="img-responsive img-border img-left" src="img/fondo.gif" alt="">
                    <hr class="visible-xs">
                    <div id = "texto">
                        <p>La marca New Holland es líder mundial en equipos agrícolas. Con una amplia e innovadora gama de productos y servicios, sus cosechadoras son las más vendidas en el mundo y son referencia en tecnología, eficiencia y productividad. Su línea de tractores es especialista en cada tipo de necesidad, con modelos de pequeña, mediana y gran potencia para el pequeño, mediano y gran productor.
     
                        No es por acaso que de cada cinco tractores producidos en el mundo, uno es New Holland. Con más de 5.000 concesionarios en todo mundo y una superestructura de posventa, New Holland ofrece asistencia técnica de calidad para garantizar el desempeño y la productividad de cada máquina en cualquier punto del planeta.</p>
                        <a href="http://agriculture.newholland.com/AR/es/Pages/Homepage.aspx" target="_blank">New Holland</a> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center"><strong>Repuestos originales New Holland:</strong></h2>
                    <hr>
                    <div id = "repuestos">
                        <p>Los repuestos originales New Holland son los únicos que cumplen los requisitos de calidad esenciales para el óptimo funcionamiento de su equipo. 
                        ¿Cómo es eso? 

                        Porque los ingenieros que diseñan esos repuestos y supervisan su producción son las mismas personas responsables de la creación de nuestros productos.

                        Mejor todavía: conocen lo que le conviene a su máquina.

                        Insista siempre en que sean repuestos originales New Holland: de este modo maximiza la duración, la seguridad y el valor de reventa de su equipo.

                        Los repuestos originales marcan la diferencia.
                        ¡La prueba está en el equipo!

                        Los filtros New Holland, fabricados en fibra sintética, permiten una filtración en dos etapas.

                        ¡Una vez más, la calidad y el rendimiento de estos repuestos originales son incomparables!.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>