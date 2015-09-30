<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-30 04:27:06
         compiled from "C:\xampp\htdocs\Paint-2015\templates\admin.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_560b487a600df7_58889413',
  'file_dependency' => 
  array (
    '3011ecb24dce34d7e650a60c1f1f3bba96d776bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\admin.tpl',
      1 => 1443580024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_560b487a600df7_58889413')) {
function content_560b487a600df7_58889413 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>


<div class="col-lg-12">
	<hr><hr><hr><hr><hr>
	<h2>Cargar nueva novedad</h2>
	<form class="form" action="admin.php?action=agregarNovedad" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12 form-group">
			<label>T&iacute;tulo</label>
			<input name="titulo" class="form-control">

		</div>
		<div class="col-lg-12 form-group">
			<label>Foto</label>
			<input type="file" name="foto" class="form-control" files="" id="imagesToUpload">
		</div>
		<div class="col-lg-12 form-group">
			<label>Detalle</label>
			<textarea rows="6" name="detalle" class="form-control"></textarea>
		</div>
		<div class="col-lg-12 form-group">
			<button href="admin.php?action=agregarNovedad" class="btn btn-primary botonAgregarImagenes">Cargar</button>
		</div>
	</form>

</div>

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
				<div class="col-md-3 gallery-grid text-center" >
					<h1><p><br><?php echo $_smarty_tpl->tpl_vars['noticia']->value['Titulo'];?>
</p></h1>	
					<a href="" class="link-noticia" id-noticia="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
">
						<br><?php echo $_smarty_tpl->tpl_vars['noticia']->value['Categoria'];?>

					</a>
				</div>
				<?php
$_smarty_tpl->tpl_vars['noticia'] = $__foreach_noticia_0_saved_local_item;
}
}
if ($__foreach_noticia_0_saved_item) {
$_smarty_tpl->tpl_vars['noticia'] = $__foreach_noticia_0_saved_item;
}
?>
				<div class="clearfix"></div>

<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagina'=>'admin'), 0, false)->render();
}
}
