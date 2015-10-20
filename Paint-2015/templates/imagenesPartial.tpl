
		{foreach $noticia['imagenes'] as $imagen}
                <img src="{$imagen['ruta']}" alt="imagen-{$imagen['id_imagen']}-noticia-{$noticia['id_noticia']}" class="img-thumbnail" />
        {/foreach}