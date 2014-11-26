<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 04:50:18
         compiled from ".\templates\errorLogueo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:898554754d3c34dc69-75420364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823bc1f1f9ac68abce7ccc3cc22644424d7da26f' => 
    array (
      0 => '.\\templates\\errorLogueo.tpl',
      1 => 1416973804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '898554754d3c34dc69-75420364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754d3c3760a2_07406065',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754d3c3760a2_07406065')) {function content_54754d3c3760a2_07406065($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerC.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-2 text-center"></div>
                    <div class="col-lg-8 text-center">
                    
                        <h1>Error de logueo. Usted no es Administrador!!!!!</h1>
                    </div>    
                <div class="col-lg-2 text-center"></div>
            </div>
        </div>        
    </div>
    <!-- /.container -->
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>