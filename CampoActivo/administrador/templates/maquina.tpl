{include file = "headerBusq.tpl" title = foo}

<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>M&aacute;quinas</strong></h2>
                    <hr>
                </div>
                {foreach key=id_maquina item=maquina from=$maquinas}
                <div class="col-lg-12 text-center">                    

                    <img class="img-responsive img-border img-full" src="{$maquina['Ruta']}" alt="">
                    <h2>{$maquina['Nombre']}
                        <br>
                        <small><h4>Modelo: {utf8_encode($maquina['Modelo'])}</h4></small>
                        <small><h4>Tipo: {$maquina['Tipo']}</h4></small>
                        <small><h4>Precio: {$maquina['Precio']}</h4></small>
                    </h2>
                    <p>{utf8_encode($maquina['Texto'])}</p>
                    <a href="index.php?action=carouselMaq&amp;id={$maquina['id_Contenido']}&amp;estado={$maquina['estado']}" class="btn btn-default btn-lg">M&aacute;s Im&aacute;genes</a>
                    <hr>
                </div>
                <div class="col-lg-6 text-center">
                    <form name = "modificar" action="index.php?action=modificarMaq" method="POST">
                        <input name = "id_maq" type = "hidden" value = "{$maquina['id_Contenido']}&amp;{$maquina['estado']}">
                        <button type = "submit">Modificar</button>
                    </form>                    
                </div>
                <div class="col-lg-6 text-center">
                    <form name = "eliminar" action="index.php?action=eliminarMaq" method="POST">
                        <input name = "id_maq" type = "hidden" value = "{$maquina['id_Contenido']}&amp;{$maquina['estado']}">
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