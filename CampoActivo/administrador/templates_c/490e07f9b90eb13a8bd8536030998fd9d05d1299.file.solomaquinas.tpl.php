<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 20:53:39
         compiled from ".\templates\solomaquinas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245905473cb81811bf1-03924135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '490e07f9b90eb13a8bd8536030998fd9d05d1299' => 
    array (
      0 => '.\\templates\\solomaquinas.tpl',
      1 => 1416945038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245905473cb81811bf1-03924135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5473cb818454c1_75911106',
  'variables' => 
  array (
    'cantidad' => 0,
    'maquinas' => 0,
    'maquina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473cb818454c1_75911106')) {function content_5473cb818454c1_75911106($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cantidad']->value>0){?>
    <?php  $_smarty_tpl->tpl_vars['maquina'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maquina']->_loop = false;
 $_smarty_tpl->tpl_vars['id_maquina'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['maquinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maquina']->key => $_smarty_tpl->tpl_vars['maquina']->value){
$_smarty_tpl->tpl_vars['maquina']->_loop = true;
 $_smarty_tpl->tpl_vars['id_maquina']->value = $_smarty_tpl->tpl_vars['maquina']->key;
?>
    <div class="col-lg-12 text-center">                    

        <img class="img-responsive img-border" src="<?php echo $_smarty_tpl->tpl_vars['maquina']->value['Ruta'];?>
" >
        <h2><?php echo $_smarty_tpl->tpl_vars['maquina']->value['Nombre'];?>

            <br>
            <small><h4>Modelo: <?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Modelo']);?>
</h4></small>
            <small><h4>Tipo: <?php echo $_smarty_tpl->tpl_vars['maquina']->value['Tipo'];?>
</h4></small>
            <small><h4>Precio: <?php echo $_smarty_tpl->tpl_vars['maquina']->value['Precio'];?>
</h4></small>
            <!-- <small><h4>Estado: <?php echo $_smarty_tpl->tpl_vars['maquina']->value["Estado"];?>
</h4></small> -->
            
        </h2>
        <p><?php echo utf8_encode($_smarty_tpl->tpl_vars['maquina']->value['Texto']);?>
</p>
        <a href="indexAdmin.php?action=carouselMaq&amp;id=<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
" method="GET" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
        <hr>
    </div>
    <div class="col-lg-6 text-center">
        <form name = "modificar" action="indexAdmin.php?action=modificarMaq" method="POST">
            <input name = "id_maq" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['maquina']->value['estado'];?>
">
            <button type = "submit">Modificar</button>
        </form>                    
    </div>
    <div class="col-lg-6 text-center">
        <form name = "eliminar" action="indexAdmin.php?action=eliminarMaq" method="POST">
            <input name = "id_maq" type = "hidden" value = "<?php echo $_smarty_tpl->tpl_vars['maquina']->value['id_Contenido'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['maquina']->value['estado'];?>
">
            <button type = "submit">Eliminar</button>
        </form>
    </div>
    <?php } ?>
<?php }else{ ?>
        <div class="row">
          <h2 style = "text-align: center">No se encontraron resultados para su búsqueda</h2>
        </div>
        <br>                
<?php }?><?php }} ?>