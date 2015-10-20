<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 02:27:34
         compiled from "C:\xampp\htdocs\dany\k\Paint-2015\templates\amplia_noticia.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56258a76d4c7d2_75950394',
  'file_dependency' => 
  array (
    'a2781b5119370c3155bc56341ebfe4cc896fdbb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dany\\k\\Paint-2015\\templates\\amplia_noticia.tpl',
      1 => 1443555551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_56258a76d4c7d2_75950394')) {
function content_56258a76d4c7d2_75950394 ($_smarty_tpl) {
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
