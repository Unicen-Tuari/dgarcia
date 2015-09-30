{include file="headerAdmin.tpl" title=foo}
<div class="top-banner"></div>	

<div class="col-lg-12 text-center">
	<br><br>
	<h2>Cargar nueva novedad</h2>
	<br><br>
<div class="contact-bottom">
         <div class="contact-text">         
          <div class="col-md-12 contact-left">
              	<form id="formulario" class="form" action="admin.php?action=agregarNovedad" method="POST">
              		
              		<div class="col-lg-12 form-group">
              			<label> Categoria: </label>
                          <input name="id_categoria" type="number" min="1" max="2" class="form-control" required>
              		</div>
              		<div class="col-lg-12 form-group">
              			<label>T&iacute;tulo</label>
              			<input name="titulo" class="form-control" required>
              		</div>
              		<div class="col-lg-12 form-group">
              			<label>Imagen</label>
              			<input type="file" name="imagesToUpload" class="form-control" files="" id="imagesToUpload" required>
              		</div>
              		<div class="col-lg-12 form-group">
              			<label>Contenido</label>
              			<textarea rows="6" name="contenido" class="form-control" required></textarea>
              		</div>
              		<div class="col-lg-12 form-group">
              			<!-- <input type="hidden" name="save" value="contact"> -->
                          <button id="btn-enviar" type="submit">Insertar</button>
              		</div>
              	</form>

            </div>
            </div>
            </div>

</div>

{foreach $noticias as $noticia}
				<div class="col-md-3 gallery-grid text-center" >
					<h1><p><br>{$noticia['Titulo']}</p></h1>	
					<a href="" class="link-noticia" id-noticia="{$noticia['id_noticia']}">
						<br>{$noticia['Categoria']}
					</a>
				</div>
				{/foreach}
				<div class="clearfix"></div>

<script type="text/javascript" src="js/funcionesAdmin.js"></script>