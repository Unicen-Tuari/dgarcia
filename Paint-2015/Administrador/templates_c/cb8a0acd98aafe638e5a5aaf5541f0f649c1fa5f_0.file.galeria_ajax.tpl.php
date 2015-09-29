<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-29 02:28:51
         compiled from "C:\xampp\htdocs\Paint-2015\Administrador\templates\galeria_ajax.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5609db43484e90_39234324',
  'file_dependency' => 
  array (
    'cb8a0acd98aafe638e5a5aaf5541f0f649c1fa5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\Administrador\\templates\\galeria_ajax.tpl',
      1 => 1443481939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5609db43484e90_39234324')) {
function content_5609db43484e90_39234324 ($_smarty_tpl) {
?>
<div class="top-banner"></div>
<div class="gallery">
	<div class="container">
		 <h3><?php echo utf8_encode($_smarty_tpl->tpl_vars['categoria']->value[0]['Nombre']);?>
</h3> 
		 <div class="gallery-bottom">
			<div class="gallery-1">
				<?php if ($_smarty_tpl->tpl_vars['cantidad']->value > 0) {?>
				<?php $_smarty_tpl->tpl_vars['espacio'] = new Smarty_Variable(0, null, 0);?>
				<?php
$_from = $_smarty_tpl->tpl_vars['imagenes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_imagen_0_saved_item = isset($_smarty_tpl->tpl_vars['imagen']) ? $_smarty_tpl->tpl_vars['imagen'] : false;
$__foreach_imagen_0_saved_key = isset($_smarty_tpl->tpl_vars['id_imagen']) ? $_smarty_tpl->tpl_vars['id_imagen'] : false;
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable();
$__foreach_imagen_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_imagen_0_total) {
$_smarty_tpl->tpl_vars['id_imagen'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['id_imagen']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
$__foreach_imagen_0_saved_local_item = $_smarty_tpl->tpl_vars['imagen'];
?>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['Ruta'];?>
" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['Ruta'];?>
" alt=""/></a>
						<?php if ($_smarty_tpl->tpl_vars['espacio']->value == 3) {?>
							<div>
								<br>
							</div>
							<?php $_smarty_tpl->tpl_vars['espacio'] = new Smarty_Variable(0, null, 0);?>
						<?php }?>
						<?php $_smarty_tpl->tpl_vars['espacio'] = new Smarty_Variable($_smarty_tpl->tpl_vars['espacio']->value+1, null, 0);?>
					</div>
				<?php
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_0_saved_local_item;
}
}
if ($__foreach_imagen_0_saved_item) {
$_smarty_tpl->tpl_vars['imagen'] = $__foreach_imagen_0_saved_item;
}
if ($__foreach_imagen_0_saved_key) {
$_smarty_tpl->tpl_vars['id_imagen'] = $__foreach_imagen_0_saved_key;
}
?>
				<!-- <div class="clearfix"></div> -->
				<?php }?>
				<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/g2.jpg" alt=""/></a>
					</div>
			</div>				
		 </div> 
	 </div>
</div>	
<?php }
}
