<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 05:29:48
         compiled from ".\templates\modificarE.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111285469385e93e1b4-99887885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e582a1bd990a5c7b204286246951a468caeeda3a' => 
    array (
      0 => '.\\templates\\modificarE.tpl',
      1 => 1416457736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111285469385e93e1b4-99887885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5469385e98de98_66947374',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5469385e98de98_66947374')) {function content_5469385e98de98_66947374($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar/Eliminar Evento</strong></h2>
                    <hr>
                        
                    <form role="form" action="index.php?action=insertarEvento" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nombre del Evento:</label>
                                <input name="nombre" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Fecha (AAAA-MM-DD): </label>
                                <input name="fecha" type="datetime" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ubicaci&oacute;n: </label>
                                <input name="ubicacion" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">

                                <label>Imagen a eliminar: </label>
                                
                                <select class="  col-lg-12">
                                    
                                    <option value = "1">Imagen 1</option>
                                    <option value = "2">Imagen 2</option>
                                    <option value = "3">Imagen 3</option>
                                    <option value = "4">Imagen 4</option>
                                    <option value = "5">Imagen 5</option>
                                    <option value = "6">Imagen 6</option>
                                    <option value = "7">Imagen 7</option>
                                    <option value = "8">Imagen 8</option>
                                </select><br>

                                <label><br>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 2: </label>
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
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>