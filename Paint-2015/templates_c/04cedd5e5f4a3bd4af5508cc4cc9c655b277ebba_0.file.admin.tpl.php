<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-19 19:16:30
         compiled from "C:\xampp\htdocs\k\Paint-2015\templates\admin.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5625256e2972d4_40983011',
  'file_dependency' => 
  array (
    '04cedd5e5f4a3bd4af5508cc4cc9c655b277ebba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\k\\Paint-2015\\templates\\admin.tpl',
      1 => 1445274767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:noticiasPartial.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_5625256e2972d4_40983011')) {
function content_5625256e2972d4_40983011 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:headerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>


<div class="top-banner"></div>	

    <div class="container">

      <div class="page-header text-center">
        <h1>Lista de Novedades</h1>
      </div><br>

      <div class="row" id="noticias">
        <?php $_smarty_tpl->setupSubTemplate('file:noticiasPartial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

      </div>
   
      <div class="row">
        <div class="col-md-6">
          <form id="miform" action="admin.php?action=agregar_novedad" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Categoria</label>

              <select name="id_categoria">
                <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categoria_0_saved_item = isset($_smarty_tpl->tpl_vars['categoria']) ? $_smarty_tpl->tpl_vars['categoria'] : false;
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable();
$__foreach_categoria_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_categoria_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$__foreach_categoria_0_saved_local_item = $_smarty_tpl->tpl_vars['categoria'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_local_item;
}
}
if ($__foreach_categoria_0_saved_item) {
$_smarty_tpl->tpl_vars['categoria'] = $__foreach_categoria_0_saved_item;
}
?>
              </select>
            </div>
            <div class="form-group">
              <label for="task">T&iacutetulo Novedad</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Tilulo">
            </div>
            <div class="form-group">
              <label for="task">Contenido</label>
              <input type="text" class="form-control" id="contenido" name="contenido" placeholder="Contenido">
            </div>
            <div class="form-group">
              <label for="imagesToUpload">Im&aacute;genes</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
            </div>

            <button type="submit" class="btn btn-default">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript"  src="js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funcionesAdmin.js"><?php echo '</script'; ?>
>
  </body>
</html>



<?php }
}
