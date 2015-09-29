<?php /* Smarty version 3.1.28-dev/63, created on 2015-09-29 02:23:32
         compiled from "C:\xampp\htdocs\Paint-2015\templates\footer.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5609da04c4b7b8_50917257',
  'file_dependency' => 
  array (
    'c0d5bc03a2a37898e187a2be2acf6da10bf982a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Paint-2015\\templates\\footer.tpl',
      1 => 1443486200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5609da04c4b7b8_50917257')) {
function content_5609da04c4b7b8_50917257 ($_smarty_tpl) {
?>

<!-- footer -->

<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-6 ftr-grid1">
				 <h4>Acerca de Paint</h4>
				 <p>Porque so&ntilde;as con un lugar ideal, con nuestras ideas de dise&ntilde;o y decoraci&oacute;n, podemos transformar esos espacios en realidad.</p>
				 <div class="social">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="in"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>						
							<div class="clearfix"></div>	
					</ul>
				 </div>
			 </div>
			 <div class="col-md-6 news-ltr">
				 <h4>Recibir Novedades</h4>
				 <p>Si quieres recibir nuestro bolet&iacute;n de novedades suscribete aqu&iacute;.</p>
				 <form>					 
					<div class="col-md-6">
						<input type="email" name="email" class="form-control" placeholder="Su correo *" id="email" required data-validation-required-message="Please enter your email address.">
					</div>
					 <input type="submit" value="Suscribirse">
					 <div class="clearfix"></div>
				 </form>
			</div>
			 <div class="clearfix"></div>
		 </div>		 
	 </div>
</div>
<div class="copywrite">
	 <div class="container">
			 <p> &copy; Paint 2015. Todos los derechos reservados.</p>
	 </div>
</div>
<!---->

<!-- <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> -->


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!-- <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.0.js"><?php echo '</script'; ?>
>-->


<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/lightbox-plus-jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/responsiveslides.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/modernizr.custom.79639.js"><?php echo '</script'; ?>
>
<!--/animated-css-->

<?php echo '<script'; ?>
 type="text/javascript" src="js/move-top.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/easing.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>

<!--/script-->
<?php echo '<script'; ?>
 type="text/javascript">
//cuando la pagina esta lista
$(function () {
	$("#<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
").parent().click();//hago click en el boton pasado por parametro
});

<?php echo '</script'; ?>
>

</body>
</html><?php }
}
