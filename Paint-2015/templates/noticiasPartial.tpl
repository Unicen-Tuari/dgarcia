
<div class="col-md-12">
          <!-- <label class="control-label" for="nombre">Novedad</label> -->
          <div class="list-group text-center"><br>
            {foreach $noticias as $noticia}
              <li class="list-group-item">                   
                  <a class="glyphicon glyphicon-trash borrarBtn" href="admin.php?action=borrar_novedad&id_task={$noticia['id_noticia']}"></a><br>
                  <a class="glyphicon glyphicon-ok" href="admin.php?action=realizar_tarea&id_task={$noticia['id_noticia']}"></a><br>
                   <a class="glyphicon glyphicon-plus botonAgregarImagenes" href="admin.php?action=agregar_imagenes&id_task={$noticia['id_noticia']}"></a>
                   <h3><br>Categor&iacute;a: {$noticia['id_categoria']}<br><br></h3>
                   <h2><br>{$noticia['titulo']}<br><br></h2> 
                   
                  {foreach $noticia['imagenes'] as $imagen}
                    <img src="{$imagen['ruta']}" alt="imagen-{$imagen['id_imagen']}-noticia-{$noticia['id_noticia']}" class="img-thumbnail" />
                  {/foreach}
                  <p><br>{$noticia['contenido']}</p>
            {/foreach} 
          </div>
</div>