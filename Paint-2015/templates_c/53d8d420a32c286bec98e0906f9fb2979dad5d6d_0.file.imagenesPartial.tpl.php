<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 00:14:55
         compiled from "C:\xampp\htdocs\dany\k\Paint-2015\templates\imagenesPartial.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56256b5fc86770_64621647',
  'file_dependency' => 
  array (
    '53d8d420a32c286bec98e0906f9fb2979dad5d6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dany\\k\\Paint-2015\\templates\\imagenesPartial.tpl',
      1 => 1445292834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_56256b5fc86770_64621647')) {
function content_56256b5fc86770_64621647 ($_smarty_tpl) {
?>

		<?php
$_from = $_smarty_tpl->tpl_vars['noticia']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_imagen_0_saved_item = isset($_smarty_tpl->tpl_vars['imagen']) ? $_smarty_tpl->tpl_vars['imagen'] : false;
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable();
$__foreach_imagen_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_imagen_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$__foreach_imagen_0_saved_local_item = $_smarty_tpl->tpl_vars['imagen'];
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" alt="imagen-<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
-noticia-<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" class="img-thumbnail" />
        <?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_0_saved_local_item;
}
}
if ($__foreach_imagen_0_saved_item) {
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_0_saved_item;
}
}
}
