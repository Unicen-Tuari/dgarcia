<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-25 23:33:25
         compiled from "C:\xampp\htdocs\Paint-2015\templates\inicio.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5605bda50ead84_67823007',
  'file_dependency' => 
  array (
    '1d7e3d2d1f0b66f3edccb839592e0135187c4eb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\inicio.tpl',
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
if ($_valid && !is_callable('content_5605bda50ead84_67823007')) {
function content_5605bda50ead84_67823007 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false)->render();
?>


<div class="contenido"></div>

<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagina'=>'inicio_ajax'), 0, false)->render();
?>


<!-- tengo que hacer un tpl nuevo solo con contenido sin header y sin footer-->

<?php }
}