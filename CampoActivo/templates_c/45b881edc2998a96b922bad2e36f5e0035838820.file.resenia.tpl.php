<?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 23:52:06
         compiled from ".\templates\resenia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136255439da9cab0a83-40898313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45b881edc2998a96b922bad2e36f5e0035838820' => 
    array (
      0 => '.\\templates\\resenia.tpl',
      1 => 1413237123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136255439da9cab0a83-40898313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5439da9cadf9d9_75075447',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439da9cadf9d9_75075447')) {function content_5439da9cadf9d9_75075447($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center"><strong>Rese&ntildea</strong></h2>
                    <hr>
                </div>
                <div class="col-md-6"><br>
                    <img class="img-responsive img-border-left" src="img/portada.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div id = "resenia">
                        <p>Campo Activo S.A. es una empresa que fue creada en el año 2001 para satisfacer todas y cada una de las necesidades de sus clientes, cumpliendo con las exigencias de sus representados. En el año 2003 fue nombrado concesionario oficial de New Holland.

                        La mayor preocupación de Campo Activo S.A., es el servicio post-venta y repuestos, por esta razón la capacitación de su gente y el stock de repuestos fueron su prioridad. En la actualidad cuenta con un plantel de personas altamente capacitadas para estar al lado del cliente cuando este lo necesite. De allí nació su slogan: <strong>"CAMPO ACTIVO S.A., LA EMPRESA QUE LO PONE MOTOR AL CAMPO ".</strong>
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Nuestro Equipo</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/equipo.jpg" alt="">
                    <h3><small>Equipo de la empresa.</small></h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/fabrica.jpg" alt="">
                    <h3><small>En la f&aacutebrica.</small></h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/taller.jpg" alt="">
                    <h3><small>Nuestro Taller.</small></h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>