<?php /* Smarty version Smarty-3.1.14, created on 2014-11-22 00:46:24
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11490543af7d18cdeb6-28387350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1416613571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11490543af7d18cdeb6-28387350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543af7d18f8dc0_28568848',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543af7d18f8dc0_28568848')) {function content_543af7d18f8dc0_28568848($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Ubicaci&oacuten</strong></h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2799.827187409258!2d-59.842185974121094!3d-36.79340037765881!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2s!4v1403727301661" width="600" height="450" frameborder="0" style="border:0"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Tel&eacutefono:
                        <strong>02281 - 427465</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">campoactivo@speedy.com.ar</a></strong>
                    </p>
                    <p>Direcci&oacuten:
                        <strong>Ruta 3 KM 299,2 - CP 7300 
                            <br>Azul, Buenos Aires</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Contacto</strong></h2>
                    <hr>
                        <div id = "contacto">
                            <p>Usted podr&aacute contactarnos dejando su mensaje aqu&iacute. 
                               <br>A la brevedad uno de nuestros representantes se comunicar&aacute con usted.
                            </p>
                        </div>
                    <form role="form" action="index.php?action=contacto" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nombre y Apellido</label>
                                <input name="name" type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label> Direcci&oacuten de Email </label>
                                <input name="email" type="email" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Tel&eacutefono</label>
                                <input name="phone" type="tel" class="form-control" required>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensaje</label>
                                <textarea name="message" class="form-control" rows="6" required></textarea>
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
    <!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>