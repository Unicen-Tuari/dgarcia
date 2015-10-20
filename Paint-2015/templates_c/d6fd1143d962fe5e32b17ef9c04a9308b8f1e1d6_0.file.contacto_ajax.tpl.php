<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-19 03:39:36
         compiled from "C:\xampp\htdocs\k\Paint-2015\templates\contacto_ajax.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562449d88c9845_89650947',
  'file_dependency' => 
  array (
    'd6fd1143d962fe5e32b17ef9c04a9308b8f1e1d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\k\\Paint-2015\\templates\\contacto_ajax.tpl',
      1 => 1443470693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_562449d88c9845_89650947')) {
function content_562449d88c9845_89650947 ($_smarty_tpl) {
?>
<div class="top-banner"></div>	
<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h3>Contacto</h3>
			</div>
			<div class="contact-bottom">
				 <div class="contact-text">					
					<div class="col-md-9 contact-left">
						<form class="form-horizontal" id="contacto_ajax" method="POST">
							<div class="form-group row">
								<div class="col-md-4">
								<input type="text" name="name" class="form-control" placeholder="Su nombre *" id="name2" required data-validation-required-message="Please enter your name.">
								</div>
							
								<div class="col-md-4">
								<input type="email" name="email" class="form-control" placeholder="Su correo *" id="email" required data-validation-required-message="Please enter your email address.">
								</div>
							
								<div class="col-md-4">
								<input type="tel" name="telefono"class="form-control" placeholder="Su teléfono *" id="tel"  required data-validation-required-message="Please enter your phone number.">
								</div>

							</div>
							

							<textarea type="text" placeholder="Su mensaje *" id="mensaje" required data-validation-required-message="Por favor escriba su mensaje."></textarea>
	
							<div class="submit-btn">								
								<input type="submit" value="Enviar">							
							</div>
						</form>
					</div>
					<div class="col-md-3 contact-right">
						<div class="address">
							<h5>Direcci&oacute;n</h5>
							<p>Paint, 
							Costa Rica 146.</p>
						</div>
						<div class="address">
							<h5>Contacto</h5>
							<p>Tel: 0249-154-4494053, 
							<span>Fax: 190-4509-494</span>
							E-mail: <a href="mailto:example@email.com">paintdjd@gmail.com</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
			 </div>
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="800" height="443" src="https://maps.google.com/maps?hl=en&q=Costa Rica 146 - Tandil&ie=UTF8&t=m&z=15&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com">Premiumlinkgenerator.com</a></small></div></iframe>
		 </div>
	 </div>
</div>	<?php }
}
