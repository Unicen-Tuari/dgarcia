{include file="header.tpl" title=foo}

<div class="col-lg-12">
	<hr><hr><hr><hr><hr>
	<h2>Cargar nueva novedad</h2>
	<form class="form" action="admin.php?action=agregarNovedad" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12 form-group">
			<label>T&iacute;tulo</label>
			<input name="titulo" class="form-control">

		</div>
		<div class="col-lg-12 form-group">
			<label>Foto</label>
			<input type="file" name="foto" class="form-control" files="" id="imagesToUpload">
		</div>
		<div class="col-lg-12 form-group">
			<label>Detalle</label>
			<textarea rows="6" name="detalle" class="form-control"></textarea>
		</div>
		<div class="col-lg-12 form-group">
			<button href="admin.php?action=agregarNovedad" class="btn btn-primary botonAgregarImagenes">Cargar</button>
		</div>
	</form>

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

{include file="footer.tpl" pagina=admin}