<?php /* Smarty version Smarty-3.1.14, created on 2014-10-15 06:28:17
         compiled from ".\templates\turno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8291543af8d0e76df8-38868293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b9c26d8ef2f2bd81e09ee322cd73ba99b40dc5' => 
    array (
      0 => '.\\templates\\turno.tpl',
      1 => 1413347294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8291543af8d0e76df8-38868293',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543af8d0e9fb74_27699874',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543af8d0e9fb74_27699874')) {function content_543af8d0e9fb74_27699874($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center"><strong>Solicitud de Turno</strong>
                        </h2>
                    <hr>
                </div>
                <div class="col-md-6 col-md-offset-3"><br>
                    <img class="img-responsive img-border-left" src="img/solicitarTurno.png" alt="">
                </div>
                <div class="col-md-6">
                    <div id = "resenia">
                        <p>

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
                        <strong>Calendario 2014</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <!-- <img class="img-responsive" src="img/equipo.jpg" alt="">
                    <h3><small>Equipo de la empresa.</small></h3> -->
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/calendario.jpg" alt="">
                    <!-- <h3><small>En la f&aacutebrica.</small></h3> -->
                </div>
                <div class="col-sm-4 text-center">
                    <!-- <img class="img-responsive" src="img/taller.jpg" alt="">
                    <h3><small>Nuestro Taller.</small></h3> -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>