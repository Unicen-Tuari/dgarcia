<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-19 23:42:11
         compiled from "C:\xampp\htdocs\dany\k\Paint-2015\templates\footerAdmin.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562563b347d8e8_32927319',
  'file_dependency' => 
  array (
    'cd44cb224626c4e67671425818fd357e025aa784' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dany\\k\\Paint-2015\\templates\\footerAdmin.tpl',
      1 => 1445290928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_562563b347d8e8_32927319')) {
function content_562563b347d8e8_32927319 ($_smarty_tpl) {
?>

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
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript"  src="js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funcionesAdmin.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
