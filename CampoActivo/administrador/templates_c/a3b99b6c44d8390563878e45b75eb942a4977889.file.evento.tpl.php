<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 01:54:08
         compiled from ".\templates\evento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235554724ef0ebb6d3-74410450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b99b6c44d8390563878e45b75eb942a4977889' => 
    array (
      0 => '.\\templates\\evento.tpl',
      1 => 1416876445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235554724ef0ebb6d3-74410450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54724ef11551c0_18815506',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54724ef11551c0_18815506')) {function content_54724ef11551c0_18815506($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerBusqEvento.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Eventos</strong></h2>
                    <hr>
                </div>
                <div id="resEventos">
                <?php echo $_smarty_tpl->getSubTemplate ("soloevento.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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