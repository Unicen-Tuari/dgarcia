<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-14 20:39:00
         compiled from "C:\xampp\htdocs\Paint-2015\templates\admin.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_561ea1442e6521_09835914',
  'file_dependency' => 
  array (
    '3011ecb24dce34d7e650a60c1f1f3bba96d776bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\admin.tpl',
      1 => 1444847868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:noticiasPartial.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_561ea1442e6521_09835914')) {
function content_561ea1442e6521_09835914 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:headerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>


<div class="top-banner"></div>	

    <div class="container">

      <div class="page-header">
        <h1>Lista de Noticias</h1>
      </div>

      <div class="row" id="noticias">
        <?php $_smarty_tpl->setupSubTemplate('file:noticiasPartial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

      </div>
   
      <div class="row">
        <div class="col-md-6">
          <form id="miform" action="admin.php?action=agregar_novedad" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="task">Novedad</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Tilulo">
            </div>
            <div class="form-group">
              <label for="task">Contenido</label>
              <input type="text" class="form-control" id="contenido" name="contenido" placeholder="Contenido">
            </div>
            <div class="form-group">
              <label for="imagesToUpload">Imagenes</label>
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
 type="text/javascript" src="js/funcionesAdmin.js"><?php echo '</script'; ?>
>
  </body>
</html>



<?php }
}
