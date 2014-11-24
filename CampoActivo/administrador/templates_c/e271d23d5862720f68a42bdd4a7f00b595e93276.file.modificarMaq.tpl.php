<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 20:51:21
         compiled from ".\templates\modificarMaq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:775754716d8fa8bcd4-25034526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e271d23d5862720f68a42bdd4a7f00b595e93276' => 
    array (
      0 => '.\\templates\\modificarMaq.tpl',
      1 => 1416858604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '775754716d8fa8bcd4-25034526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54716d8faf5bd9_28959224',
  'variables' => 
  array (
    'maquinas' => 0,
    'maquina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54716d8faf5bd9_28959224')) {function content_54716d8faf5bd9_28959224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Maquina</strong></h2>
                    <hr>
                    <?php  $_smarty_tpl->tpl_vars['maquina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maquina']->_loop = false;
 $_smarty_tpl->tpl_vars['id_maquina'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['maquinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->key => $_smarty_tpl->tpl_vars['maquina']->value){
$_smarty_tpl->tpl_vars['maquina']->_loop = true;
 $_smarty_tpl->tpl_vars['id_maquina']->value = $_smarty_tpl->tpl_vars['maquina']->key;
?>    
                    <form role="form" action="index.php?action=actualizarMaq" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la M&aacute;quina:</label>
                                <input name="nombre" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Nombre'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Tipo: </label>
                                <input name="tipo" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Tipo'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Modelo: </label>
                                <input name="modelo" type="number" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Modelo'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Estado Actual: <?php echo $_smarty_tpl->tpl_vars['maquina']->value['estado'];?>
 </label>
                                 <input name="estado" type="text" class="form-control" value = "<?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['estado']);?>
">                                
                            </div>
                            <div class="form-group col-lg-12">

                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Ruta'];?>
" rows="6">
                              
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Precio U$S: </label>
                                <input name="precio" type="text" class="form-control" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Precio'];?>
">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6"><?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Texto']);?>
</textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                                               
                                 <input name = "id_maq" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['maquina']->value['estado'];?>
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