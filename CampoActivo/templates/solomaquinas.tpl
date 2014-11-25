{if $cantidad gt 0}
    {foreach key=id_maquina item=maquina from=$maquinas}
    <div class="col-lg-12 text-center">                    

        <img class="img-responsive img-border" src="{$maquina['Ruta']}" >
        <h2>{$maquina['Nombre']}
            <br>
            <small><h4>Modelo: {utf8_encode($maquina['Modelo'])}</h4></small>
            <small><h4>Tipo: {$maquina['Tipo']}</h4></small>
            <small><h4>Precio: {$maquina['Precio']}</h4></small>
            <!-- <small><h4>Estado: {$maquina["Estado"]}</h4></small> -->
            
        </h2>
        <p>{utf8_encode($maquina['Texto'])}</p>
        <a href="index.php?action=carouselMaq&amp;id={$maquina['id_Contenido']}" method="GET" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
        <hr>
    </div>
    {/foreach}
{else}
        <div class="row">
          <h2 style = "text-align: center">No se encontraron resultados para su búsqueda</h2>
        </div>
        <br>                
{/if}