<div class="top-banner"></div>
<div class="gallery">
	<div class="container">
		 <h3>{utf8_encode($categoria[0]['Nombre'])}</h3> 
		 <div class="gallery-bottom">
			<div class="gallery-1">
				{if $cantidad gt 0}
				{foreach key=id_noticia item=noticia from=$noticias}
				<div class="col-md-3 gallery-grid text-center" >
					<h2><p><br>{$noticia['Titulo']}</p></h2>	
					<a href="" class="link-noticia" id-noticia="{$noticia['id_noticia']}">
						<br><img class="example-image" src="{$noticia['Ruta']}" alt=""/>
					</a>
				</div>
				{/foreach}
				{/if}
			</div>				
		 </div> 
	 </div>
</div>	
