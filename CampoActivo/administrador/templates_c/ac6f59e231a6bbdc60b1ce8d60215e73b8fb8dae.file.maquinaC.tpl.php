<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 21:18:48
         compiled from ".\templates\maquinaC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215475474e3fe1a0f80-10339633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac6f59e231a6bbdc60b1ce8d60215e73b8fb8dae' => 
    array (
      0 => '.\\templates\\maquinaC.tpl',
      1 => 1416946725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215475474e3fe1a0f80-10339633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474e3fe1c9521_57311434',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474e3fe1c9521_57311434')) {function content_5474e3fe1c9521_57311434($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerBusqMaqC.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center">
                            <strong>M&aacute;quinas</strong>
                        </h2>
                    <hr>
                </div>
                <div id="resMaquinas"> 
                <?php echo $_smarty_tpl->getSubTemplate ("solomaquinasC.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Anterior</a>
                        </li>
                        <li class="next"><a href="#">Siguiente &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>