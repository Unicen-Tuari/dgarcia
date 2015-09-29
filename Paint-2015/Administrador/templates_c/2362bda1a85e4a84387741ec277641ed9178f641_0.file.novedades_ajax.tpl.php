<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-29 02:27:07
         compiled from "C:\xampp\htdocs\Paint-2015\Administrador\templates\novedades_ajax.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5609dadb28d0d4_31088998',
  'file_dependency' => 
  array (
    '2362bda1a85e4a84387741ec277641ed9178f641' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\Administrador\\templates\\novedades_ajax.tpl',
      1 => 1443386268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5609dadb28d0d4_31088998')) {
function content_5609dadb28d0d4_31088998 ($_smarty_tpl) {
?>
<div class="top-banner"></div>
<div class="gallery">
	<div class="container">
		 <h3><?php echo utf8_encode($_smarty_tpl->tpl_vars['categoria']->value[0]['Nombre']);?>
</h3> 
		 <div class="gallery-bottom">
			<div class="gallery-1">
				<?php if ($_smarty_tpl->tpl_vars['cantidad']->value > 0) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['noticias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_noticia_0_saved_item = isset($_smarty_tpl->tpl_vars['noticia']) ? $_smarty_tpl->tpl_vars['noticia'] : false;
$__foreach_noticia_0_saved_key = isset($_smarty_tpl->tpl_vars['id_noticia']) ? $_smarty_tpl->tpl_vars['id_noticia'] : false;
$_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable();
$__foreach_noticia_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_noticia_0_total) {
$_smarty_tpl->tpl_vars['id_noticia'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['id_noticia']->value => $_smarty_tpl->tpl_vars['noticia']->value) {
$__foreach_noticia_0_saved_local_item = $_smarty_tpl->tpl_vars['noticia'];
?>
				<div class="col-md-3 gallery-grid">
					<h2><?php echo $_smarty_tpl->tpl_vars['noticia']->value['Titulo'];?>
</h2>
					<a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['Ruta'];?>
" data-lightbox="example-set" data-title="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['Titulo'];?>
"><img class="example-image" src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['Ruta'];?>
" alt=""/></a>
					<p><?php echo utf8_encode($_smarty_tpl->tpl_vars['noticia']->value['Contenido']);?>
</p>
				</div>
				<?php
$_smarty_tpl->tpl_vars['noticia'] = $__foreach_noticia_0_saved_local_item;
}
}
if ($__foreach_noticia_0_saved_item) {
$_smarty_tpl->tpl_vars['noticia'] = $__foreach_noticia_0_saved_item;
}
if ($__foreach_noticia_0_saved_key) {
$_smarty_tpl->tpl_vars['id_noticia'] = $__foreach_noticia_0_saved_key;
}
?>
				<?php }?>
			</div>				
		 </div> 
	 </div>
</div>	
<?php }
}
