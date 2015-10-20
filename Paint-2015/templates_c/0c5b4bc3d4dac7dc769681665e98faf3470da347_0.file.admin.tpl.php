<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-20 02:26:12
         compiled from "C:\xampp\htdocs\dany\k\Paint-2015\templates\admin.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56258a24e735e2_37379089',
  'file_dependency' => 
  array (
    '0c5b4bc3d4dac7dc769681665e98faf3470da347' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dany\\k\\Paint-2015\\templates\\admin.tpl',
      1 => 1445293222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:noticiasPartial.tpl' => 1,
    'file:footerAdmin.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_56258a24e735e2_37379089')) {
function content_56258a24e735e2_37379089 ($_smarty_tpl) {
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
        <div class="col-md-12">
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
            <div class="form-group id="imagenes" ">
              <label for="imagesToUpload">Im&aacute;genes</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div><br><br>

<?php $_smarty_tpl->setupSubTemplate('file:footerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

    



<?php }
}
