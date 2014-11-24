{include file = "header.tpl" title = foo}

<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Evento</strong></h2>
                    <hr>
                    {foreach key=id_evento item=evento from=$eventos}   
                    <form role="form" action="index.php?action=actualizarEvento" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nombre del Evento:</label>
                                <input name="nombre" type="text" class="form-control"value = "{utf8_encode($evento['Nombre'])}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Fecha (AAAA-MM-DD): </label>
                                <input name="fecha" type="datetime" class="form-control"value = "{$evento['Fecha']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ubicaci&oacute;n: </label>
                                <input name="ubicacion" type="text" class="form-control"value = "{utf8_encode($evento['Ubicacion'])}">
                            </div>                            
                            <div class="form-group col-lg-12">
                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" value = "{$evento['Ruta']}" rows="6">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6">{utf8_encode($evento['Texto'])}</textarea>
                            </div>                            
                            <div class="form-group col-lg-12">
                                <input name = "id_evento" type = "hidden" value = "{$evento['id_Contenido']}">
                                <button type="submit" class="btn btn-default">Modificar</button>
                            </div>
                        </div>
                    </form>
                    {/foreach}
                </div>
            </div>
        </div>

    </div>

{include file = "footer.tpl"}