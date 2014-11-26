<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 11:25:56
         compiled from ".\templates\errorRegistro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298435475aa79ad2481-74810785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05daf5ebed59f2b718846b864774711484c25b30' => 
    array (
      0 => '.\\templates\\errorRegistro.tpl',
      1 => 1416997553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298435475aa79ad2481-74810785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475aa79b19096_09345523',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475aa79b19096_09345523')) {function content_5475aa79b19096_09345523($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-2 text-center"></div>
                    <div class="col-lg-8 text-center">
                    
                        <h1>Ya existe ese usuario o ese email!!!!!</h1>
                    </div>    
                <div class="col-lg-2 text-center"></div>
            </div>
        </div>        
    </div>
    <!-- /.container -->
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>