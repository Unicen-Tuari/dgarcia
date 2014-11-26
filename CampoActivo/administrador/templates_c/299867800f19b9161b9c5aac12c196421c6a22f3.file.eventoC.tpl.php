<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 21:19:48
         compiled from ".\templates\eventoC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65685474e4647c95e9-27840833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '299867800f19b9161b9c5aac12c196421c6a22f3' => 
    array (
      0 => '.\\templates\\eventoC.tpl',
      1 => 1416946783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65685474e4647c95e9-27840833',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474e4647fabf4_94461197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474e4647fabf4_94461197')) {function content_5474e4647fabf4_94461197($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerBusqEventoC.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Eventos</strong></h2>
                    <hr>
                </div>
                <div id="resEventos">
                <?php echo $_smarty_tpl->getSubTemplate ("soloeventoC.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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