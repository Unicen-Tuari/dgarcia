<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 01:09:12
         compiled from "C:\xampp\htdocs\dany\k\Paint-2015\templates\novedades_ajax.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56257818b489a1_47956290',
  'file_dependency' => 
  array (
    'ba3e46ab4541a4dde4370fde5dddb642c2a71eb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dany\\k\\Paint-2015\\templates\\novedades_ajax.tpl',
      1 => 1443622651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_56257818b489a1_47956290')) {
function content_56257818b489a1_47956290 ($_smarty_tpl) {
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
				<div class="col-md-3 gallery-grid text-center" >
					<h1><p><br><?php echo $_smarty_tpl->tpl_vars['noticia']->value['Titulo'];?>
</p></h1>	
					<a href="" class="link-noticia" id-noticia="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
">
						<br><img class="example-image" src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['Ruta'];?>
" alt=""/>
					</a>
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
