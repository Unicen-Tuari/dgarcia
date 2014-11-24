{include file = "headerBusq.tpl" title = foo}

<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Eventos</strong></h2>
                    <hr>
                </div>
                {foreach key=id_evento item=evento from=$eventos}
                <div class="col-lg-12 text-center">                    

                    <img class="img-responsive img-border img-full" src="{$evento['Ruta']}" alt="">
                    <h2>{utf8_encode($evento['Nombre'])}
                        <br>
                        <small><h4>Fecha: {$evento['Fecha']}</h4></small>
                        <small><h4>Ubicaci&oacute;n: {$evento['Ubicacion']}</h4></small>
                    </h2>
                    <p>{utf8_encode($evento['Texto'])}                    </p>
                    <a href="index.php?action=carouselE&amp;id={$evento['id_Contenido']}" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
                    <hr> 
                </div>                
                <div class="col-lg-6 text-center">
                    <form name = "modificar" action="index.php?action=modificarEvento" method="POST">
                        <input name = "id_evento" type = "hidden" value = "{$evento['id_contenido']}">
                        <button type = "submit">Modificar</button>
                    </form>                    
                </div>
                <div class="col-lg-6 text-center">
                    <form name = "eliminar" action="index.php?action=eliminarEvento" method="POST">
                        <input name = "id_evento" type = "hidden" value = "{$evento['id_contenido']}">
                        <button type = "submit">Eliminar</button>
                    </form>
                </div>
                {/foreach}
                
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Anterior</a>
                        </li>
                        <li class="next"><a href="#">Siguiente &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

{include file = "footer.tpl"}