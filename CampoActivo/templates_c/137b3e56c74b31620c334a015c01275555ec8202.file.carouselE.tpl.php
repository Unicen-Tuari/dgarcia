<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 10:40:59
         compiled from ".\templates\carouselE.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69635475a02b491a25-26367376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '137b3e56c74b31620c334a015c01275555ec8202' => 
    array (
      0 => '.\\templates\\carouselE.tpl',
      1 => 1416934479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69635475a02b491a25-26367376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imagenes' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475a02b51cbe8_74863866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475a02b51cbe8_74863866')) {function content_5475a02b51cbe8_74863866($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-2 text-center"></div>
                <div class="col-lg-8 text-center">
                    <div id="carousel-example-generic" class="carousel slide">

                       <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['img']['iteration']++;
?>
                            <div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['img']['iteration']==1){?> active<?php }?>">
                                <img class="img-responsive img-full" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['Ruta'];?>
" alt="">
                            </div> 
                         <?php } ?>                              
                        </div>                        

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>                    
                </div>
                <div class="col-lg-2 text-center"></div>
            </div>
        </div>
        
    </div> 
    <!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>