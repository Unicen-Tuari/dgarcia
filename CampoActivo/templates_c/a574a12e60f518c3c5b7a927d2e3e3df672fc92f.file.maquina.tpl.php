<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 08:08:31
         compiled from ".\templates\maquina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2667354757c6f98ac10-28872308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a574a12e60f518c3c5b7a927d2e3e3df672fc92f' => 
    array (
      0 => '.\\templates\\maquina.tpl',
      1 => 1416883002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2667354757c6f98ac10-28872308',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54757c6f9bab57_53899567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54757c6f9bab57_53899567')) {function content_54757c6f9bab57_53899567($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerBusqMaq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>M&aacute;quinas</strong></h2>
                    <hr>
                </div>
                <div id="resMaquinas"> 
                <?php echo $_smarty_tpl->getSubTemplate ("solomaquinas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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