<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-29 22:33:00
         compiled from "C:\xampp\htdocs\Paint-2015\templates\amplia_noticia.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_560af57d01de56_27989068',
  'file_dependency' => 
  array (
    '4d8288f6f3932c8d53a467798d791bfb6a47736c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\amplia_noticia.tpl',
      1 => 1443555551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_560af57d01de56_27989068')) {
function content_560af57d01de56_27989068 ($_smarty_tpl) {
?>
<div class="top-banner"></div>
<div class="gallery">
	<div class="container">
		 <div class="gallery-bottom">
			<div class="gallery-1">
				<div class="col-lg-12 col-centered" align="center">
					<h1><?php echo $_smarty_tpl->tpl_vars['novedad']->value[0]['Titulo'];?>
</h1><br>
					<img class="example-image" src="<?php echo $_smarty_tpl->tpl_vars['novedad']->value[0]['Ruta'];?>
" alt=""/>
					<h4><br><br><?php echo utf8_encode($_smarty_tpl->tpl_vars['novedad']->value[0]['Contenido']);?>
</h4>
				</div>
			</div>				
		 </div> 
	 </div>
</div><?php }
}
