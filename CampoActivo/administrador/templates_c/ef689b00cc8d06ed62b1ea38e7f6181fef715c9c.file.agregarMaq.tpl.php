<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 23:06:16
         compiled from ".\templates\agregarMaq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2212554724c2b09e8a6-70003343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef689b00cc8d06ed62b1ea38e7f6181fef715c9c' => 
    array (
      0 => '.\\templates\\agregarMaq.tpl',
      1 => 1416946041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2212554724c2b09e8a6-70003343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54724c2b0ecbf5_43179484',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54724c2b0ecbf5_43179484')) {function content_54724c2b0ecbf5_43179484($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerC.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Nueva Maquina</strong></h2>
                    <hr>
                        
                    <form role="form" action="indexAdmin.php?action=insertarMaq" method="POST"> 
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la M&aacute;quina:</label>
                                <input name="nombre" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Tipo: </label>
                                <input name="tipo" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Modelo: </label>
                                <input name="modelo" type="number" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Estado (U: Usado - N: Nuevo:) </label>
                                <select enabled name="estado"  required >
                                    <option value="NUEVA"> NUEVA </option>
                                    <option value="USADA"> USADA </option>
                                </select><br>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" rows="6">
                                <!-- <label>Ruta 2: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 3:</label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 4: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 5: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 6: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 7: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 8: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input> -->
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Precio U$S: </label>
                                <input name="precio" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>