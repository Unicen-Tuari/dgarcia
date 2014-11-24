<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 01:33:01
         compiled from ".\templates\maquina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2051954716db7d240f8-16910723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a574a12e60f518c3c5b7a927d2e3e3df672fc92f' => 
    array (
      0 => '.\\templates\\maquina.tpl',
      1 => 1416788780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2051954716db7d240f8-16910723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54716db7d6b893_99915576',
  'variables' => 
  array (
    'maquinas' => 0,
    'maquina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54716db7d6b893_99915576')) {function content_54716db7d6b893_99915576($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerBusq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>M&aacute;quinas</strong></h2>
                    <hr>
                </div>
                <?php  $_smarty_tpl->tpl_vars['maquina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maquina']->_loop = false;
 $_smarty_tpl->tpl_vars['id_maquina'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['maquinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->key => $_smarty_tpl->tpl_vars['maquina']->value){
$_smarty_tpl->tpl_vars['maquina']->_loop = true;
 $_smarty_tpl->tpl_vars['id_maquina']->value = $_smarty_tpl->tpl_vars['maquina']->key;
?>
                <div class="col-lg-12 text-center">                    

                    <img class="img-responsive img-border img-full" src="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Ruta'];?>
" alt="">
                    <h2><?php echo $_smarty_tpl->tpl_vars['maquina']->value['Nombre'];?>

                        <br>
                        <small><h4>Modelo: <?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Modelo']);?>
</h4></small>
                        <small><h4>Tipo: <?php echo $_smarty_tpl->tpl_vars['maquina']->value['Tipo'];?>
</h4></small>
                        <small><h4>Precio: <?php echo $_smarty_tpl->tpl_vars['maquina']->value['Precio'];?>
</h4></small>
                    </h2>
                    <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Texto']);?>
</p>
                    <a href="index.php?action=carouselMaq&amp;id=<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
&amp;estado=<?php echo $_smarty_tpl->tpl_vars['maquina']->value['estado'];?>
" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
                    <hr>
                </div>
                <div class="col-lg-6 text-center">
                    <form name = "modificar" action="index.php?action=modificarMaq" method="POST">
                        <input name = "id_maq" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['maquina']->value['estado'];?>
">
                        <button type = "submit">Modificar</button>
                    </form>                    
                </div>
                <div class="col-lg-6 text-center">
                    <form name = "eliminar" action="index.php?action=eliminarMaq" method="POST">
                        <input name = "id_maq" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['maquina']->value['estado'];?>
">
                        <button type = "submit">Eliminar</button>
                    </form>
                </div>
                <?php } ?>
                
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