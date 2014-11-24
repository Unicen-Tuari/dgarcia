<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 20:47:32
         compiled from ".\templates\modificarEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23429547386c49f2275-77684807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c58aa82e1f12e4ba0126c023f5f1b18c0e0b591' => 
    array (
      0 => '.\\templates\\modificarEvento.tpl',
      1 => 1416858443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23429547386c49f2275-77684807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547386c4a4c9b3_39217846',
  'variables' => 
  array (
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547386c4a4c9b3_39217846')) {function content_547386c4a4c9b3_39217846($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Evento</strong></h2>
                    <hr>
                    <?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_smarty_tpl->tpl_vars['id_evento'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value){
$_smarty_tpl->tpl_vars['evento']->_loop = true;
 $_smarty_tpl->tpl_vars['id_evento']->value = $_smarty_tpl->tpl_vars['evento']->key;
?>   
                    <form role="form" action="index.php?action=actualizarEvento" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nombre del Evento:</label>
                                <input name="nombre" type="text" class="form-control"value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Nombre']);?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Fecha (AAAA-MM-DD): </label>
                                <input name="fecha" type="datetime" class="form-control"value = "<?php echo $_smarty_tpl->tpl_vars['evento']->value['Fecha'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ubicaci&oacute;n: </label>
                                <input name="ubicacion" type="text" class="form-control"value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Ubicacion']);?>
">
                            </div>                            
                            <div class="form-group col-lg-12">
                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['evento']->value['Ruta'];?>
" rows="6">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6"><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Texto']);?>
</textarea>
                            </div>                            
                            <div class="form-group col-lg-12">
                                <input name = "id_evento" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_Contenido'];?>
">
                                <button type="submit" class="btn btn-default">Modificar</button>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>