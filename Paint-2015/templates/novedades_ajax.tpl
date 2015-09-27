<div class="top-banner"></div>
<div class="gallery">
	<div class="container">
		 <h3>{utf8_encode($categoria[0]['Nombre'])}</h3> 
		 <div class="gallery-bottom">
			<div class="gallery-1">
				{if $cantidad gt 0}
				{foreach key=id_noticia item=noticia from=$noticias}
				<div class="col-md-3 gallery-grid">
					<h2>{$noticia['Titulo']}</h2>
					<a class="example-image-link" href="{$noticia['Ruta']}" data-lightbox="example-set" data-title="{$noticia['Titulo']}"><img class="example-image" src="{$noticia['Ruta']}" alt=""/></a>
					<p>{utf8_encode($noticia['Contenido'])}</p>
				</div>
				{/foreach}
				{/if}
			</div>				
		 </div> 
	 </div>
</div>	
