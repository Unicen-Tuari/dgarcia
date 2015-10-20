<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-19 02:33:02
         compiled from "C:\xampp\htdocs\k\Paint-2015\templates\inicio.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56243a3e348ff0_84519303',
  'file_dependency' => 
  array (
    '39dc72e88ae4450eebb6f4f68bd17e800cd7d301' => 
    array (
      0 => 'C:\\xampp\\htdocs\\k\\Paint-2015\\templates\\inicio.tpl',
      1 => 1443143747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_56243a3e348ff0_84519303')) {
function content_56243a3e348ff0_84519303 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>


<div class="contenido"></div>

<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagina'=>'inicio_ajax'), 0, false)->render();
?>


<!-- tengo que hacer un tpl nuevo solo con contenido sin header y sin footer-->

<?php }
}
