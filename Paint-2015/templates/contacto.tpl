{include file="header.tpl" title=foo}

<div class="top-banner"></div>	
<div class="contact">
		<div class="container">
			<div class="contact-top">
				<h3>Contacto</h3>
			</div>
			<div class="contact-bottom">
				 <div class="contact-text">					
					<div class="col-md-9 contact-left">
						<form>
							<!-- <input type="text" class="text" value="Ingrese E-mail" placeholder="Su correo *" id="email" required data-validation-required-message="Please enter your email address."> -->
							<!-- <input type="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" />
							<input type="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}" />
							<input type="text" value="Tel&eacute;fono" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Teléfono';}" /> -->
							<input type="text" name="name" class="form-control" placeholder="Su nombre *" id="name" required data-validation-required-message="Please enter your name.">
							<input type="email" name="email" class="form-control" placeholder="Su correo *" id="email" required data-validation-required-message="Please enter your email address.">
							<input type="tel" name="tel"class="form-control" placeholder="Su teléfono " id="phone" required data-validation-required-message="Please enter your phone number.">

							<!-- <textarea value="Mensaje:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje';}">Mensaje...</textarea> -->
							<textarea type="text" placeholder="Su mensaje *" id="mensaje"</textarea>

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
</div>		 

{include file="footer.tpl"}