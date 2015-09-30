<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-30 22:24:43
         compiled from "C:\xampp\htdocs\Paint-2015\templates\admin.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_560c450b6a2688_35630681',
  'file_dependency' => 
  array (
    '3011ecb24dce34d7e650a60c1f1f3bba96d776bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\admin.tpl',
      1 => 1443644669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_560c450b6a2688_35630681')) {
function content_560c450b6a2688_35630681 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:headerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>

<div class="top-banner"></div>	

<div class="col-lg-12 text-center">
	<br><br>
	<h2>Cargar nueva novedad</h2>
	<br><br>
<div class="contact-bottom">
         <div class="contact-text">         
          <div class="col-md-12 contact-left">
              	<form id="formulario" class="form" action="admin.php?action=agregarNovedad" method="POST">
              		
              		<div class="col-lg-12 form-group">
              			<label> Categoria: </label>
                          <input name="id_categoria" type="number" min="1" max="2" class="form-control" required>
              		</div>
              		<div class="col-lg-12 form-group">
              			<label>T&iacute;tulo</label>
              			<input name="titulo" class="form-control" required>
              		</div>
              		<div class="col-lg-12 form-group">
              			<label>Imagen</label>
              			<input type="file" name="imagesToUpload" class="form-control" files="" id="imagesToUpload" required>
              		</div>
              		<div class="col-lg-12 form-group">
              			<label>Contenido</label>
              			<textarea rows="6" name="contenido" class="form-control" required></textarea>
              		</div>
              		<div class="col-lg-12 form-group">
              			<!-- <input type="hidden" name="save" value="contact"> -->
                          <button id="btn-enviar" type="submit">Insertar</button>
              		</div>
              	</form>

            </div>
            </div>
            </div>

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

<?php echo '<script'; ?>
 type="text/javascript" src="js/funcionesAdmin.js"><?php echo '</script'; ?>
><?php }
}
