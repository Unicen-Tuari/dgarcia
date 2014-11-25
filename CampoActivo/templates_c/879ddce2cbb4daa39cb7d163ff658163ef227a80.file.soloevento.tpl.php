<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 18:49:52
         compiled from ".\templates\soloevento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267115474a46c391814-15584562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '879ddce2cbb4daa39cb7d163ff658163ef227a80' => 
    array (
      0 => '.\\templates\\soloevento.tpl',
      1 => 1416937588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267115474a46c391814-15584562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474a46c4d6ef9_64583735',
  'variables' => 
  array (
    'cantidad' => 0,
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474a46c4d6ef9_64583735')) {function content_5474a46c4d6ef9_64583735($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cantidad']->value>0){?>
    <?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_smarty_tpl->tpl_vars['id_evento'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value){
$_smarty_tpl->tpl_vars['evento']->_loop = true;
 $_smarty_tpl->tpl_vars['id_evento']->value = $_smarty_tpl->tpl_vars['evento']->key;
?>
    <div class="col-lg-12 text-center">                    

        <img class="img-responsive img-border" src="<?php echo $_smarty_tpl->tpl_vars['evento']->value['Ruta'];?>
" alt="">
        <h2><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Nombre']);?>

            <br>
            <small><h4>Fecha: <?php echo $_smarty_tpl->tpl_vars['evento']->value['Fecha'];?>
</h4></small>
            <small><h4>Ubicaci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['evento']->value['Ubicacion'];?>
</h4></small>
        </h2>
        <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Texto']);?>
                    </p>
        <a href="index.php?action=carouselE&amp;id=<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_Contenido'];?>
" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
        <hr> 
    </div>   
    <?php } ?>
<?php }else{ ?>
    <div class="row">
      <h2 style = "text-align:center">No se encontraron resultados para su búsqueda</h2>
    </div>
    <br>                
<?php }?><?php }} ?>