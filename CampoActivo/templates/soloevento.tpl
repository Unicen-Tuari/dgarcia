{if $cantidad gt 0}
    {foreach key=id_evento item=evento from=$eventos}
    <div class="col-lg-12 text-center">                    

        <img class="img-responsive img-border" src="{$evento['Ruta']}" alt="">
        <h2>{utf8_encode($evento['Nombre'])}
            <br>
            <small><h4>Fecha: {$evento['Fecha']}</h4></small>
            <small><h4>Ubicaci&oacute;n: {$evento['Ubicacion']}</h4></small>
        </h2>
        <p>{utf8_encode($evento['Texto'])}                    </p>
        <a href="index.php?action=carouselE&amp;id={$evento['id_Contenido']}" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
        <hr> 
    </div>   
    {/foreach}
{else}
    <div class="row">
      <h2 style = "text-align:center">No se encontraron resultados para su búsqueda</h2>
    </div>
    <br>                
{/if}