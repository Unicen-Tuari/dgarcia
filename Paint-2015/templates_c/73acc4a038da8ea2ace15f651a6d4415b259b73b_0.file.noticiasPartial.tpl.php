<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 01:04:06
         compiled from "C:\xampp\htdocs\dany\k\Paint-2015\templates\noticiasPartial.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562576e68cfb15_86767994',
  'file_dependency' => 
  array (
    '73acc4a038da8ea2ace15f651a6d4415b259b73b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dany\\k\\Paint-2015\\templates\\noticiasPartial.tpl',
      1 => 1445293115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_562576e68cfb15_86767994')) {
function content_562576e68cfb15_86767994 ($_smarty_tpl) {
?>

<div class="col-md-12">
          <!-- <label class="control-label" for="nombre">Novedad</label> -->
          <div class="list-group text-center"><br>
            <?php
$_from = $_smarty_tpl->tpl_vars['noticias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_noticia_0_saved_item = isset($_smarty_tpl->tpl_vars['noticia']) ? $_smarty_tpl->tpl_vars['noticia'] : false;
$_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable();
$__foreach_noticia_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_noticia_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
$__foreach_noticia_0_saved_local_item = $_smarty_tpl->tpl_vars['noticia'];
?>
              <li class="list-group-item">                   
                  <a class="glyphicon glyphicon-trash borrarBtn" href="admin.php?action=borrar_novedad&id_task=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"></a><br>
                  <a class="glyphicon glyphicon-ok" href="admin.php?action=realizar_tarea&id_task=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"></a><br>
                   <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="admin.php?action=agregar_imagenes&id_task=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"></a>
                   <h3><br>Categor&iacute;a: <?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_categoria'];?>
<br><br></h3>
                   <h2><br><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
<br><br></h2> 
                   
                  <?php
$_from = $_smarty_tpl->tpl_vars['noticia']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_imagen_1_saved_item = isset($_smarty_tpl->tpl_vars['imagen']) ? $_smarty_tpl->tpl_vars['imagen'] : false;
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable();
$__foreach_imagen_1_total = $_smarty_tpl->_count($_from);
if ($__foreach_imagen_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$__foreach_imagen_1_saved_local_item = $_smarty_tpl->tpl_vars['imagen'];
?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['ruta'];?>
" alt="imagen-<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
-noticia-<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" class="img-thumbnail" />
                  <?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_1_saved_local_item;
}
}
if ($__foreach_imagen_1_saved_item) {
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_1_saved_item;
}
?>
                  <p><br><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</p>
            <?php
$_smarty_tpl->tpl_vars['noticia'] = $__foreach_noticia_0_saved_local_item;
}
}
if ($__foreach_noticia_0_saved_item) {
$_smarty_tpl->tpl_vars['noticia'] = $__foreach_noticia_0_saved_item;
}
?> 
          </div>
</div><?php }
}
