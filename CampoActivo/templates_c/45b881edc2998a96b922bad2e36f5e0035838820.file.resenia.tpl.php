<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 08:08:27
         compiled from ".\templates\resenia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1557654757c6b321db3-65418798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45b881edc2998a96b922bad2e36f5e0035838820' => 
    array (
      0 => '.\\templates\\resenia.tpl',
      1 => 1416933302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557654757c6b321db3-65418798',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54757c6b352f24_72012495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54757c6b352f24_72012495')) {function content_54757c6b352f24_72012495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                    <h2 class="intro-text text-center"><strong>Rese&ntilde;a</strong></h2>
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
                <h3><small>En la f&aacute;brica.</small></h3>
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