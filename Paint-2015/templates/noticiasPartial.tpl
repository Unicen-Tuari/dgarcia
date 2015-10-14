
<div class="col-md-6">
          <label class="control-label" for="nombre">Noticia!!!!</label>
          <div class="list-group">
            {foreach $noticias as $noticia}
              <li class="list-group-item">                   
                  <a class="glyphicon glyphicon-trash borrarBtn" href="admin.php?action=borrar_novedad&id_task={$noticia['id_noticia']}"></a>
                  <a class="glyphicon glyphicon-ok" href="admin.php?action=realizar_tarea&id_task={$noticia['id_noticia']}"></a>
                   <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="admin.php?action=agregar_imagenes&id_task={$noticia['id_noticia']}"></a> 
                  {foreach $noticia['imagenes'] as $imagen}
                    <img src="{$imagen['ruta']}" alt="imagen-{$imagen['id_imagen']}-noticia-{$noticia['id_noticia']}" class="img-thumbnail" />
                  {/foreach}
            {/foreach} 
          </div>
</div>