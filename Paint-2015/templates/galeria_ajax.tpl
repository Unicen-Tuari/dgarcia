<div class="top-banner"></div>
<div class="gallery">
	<div class="container">
		 <h3>{utf8_encode($categoria[0]['Nombre'])}</h3> 
		 <div class="gallery-bottom">
			<div class="gallery-1">
				{if $cantidad gt 0}
				{$espacio=0}
				{foreach key=id_imagen item=imagen from=$imagenes}
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="{$imagen['Ruta']}" data-lightbox="example-set" data-title=""><img class="example-image" src="{$imagen['Ruta']}" alt=""/></a>
						{if $espacio == 3}
							<div>
								<br>
							</div>
							{$espacio = 0}
						{/if}
						{$espacio= $espacio+1}
					</div>
				{/foreach}
				{/if}
			</div>				
		 </div> 
	 </div>
</div>	
