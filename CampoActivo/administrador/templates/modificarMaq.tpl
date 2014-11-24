{include file = "header.tpl" title = foo}

<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Modificar Maquina</strong></h2>
                    <hr>
                    {foreach key=id_maquina item=maquina from=$maquinas}    
                    <form role="form" action="index.php?action=actualizarMaq" method="POST">
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la M&aacute;quina:</label>
                                <input name="nombre" type="text" class="form-control" value = "{$maquina['Nombre']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Tipo: </label>
                                <input name="tipo" type="text" class="form-control" value = "{$maquina['Tipo']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Modelo: </label>
                                <input name="modelo" type="number" class="form-control" value = "{$maquina['Modelo']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Estado Actual: {$maquina['estado']} </label>
                                 <input name="estado" type="text" class="form-control" value = "{utf8_encode($maquina['estado'])}">                                
                            </div>
                            <div class="form-group col-lg-12">

                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" value = "{$maquina['Ruta']}" rows="6">
                              
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Precio U$S: </label>
                                <input name="precio" type="text" class="form-control" value = "{$maquina['Precio']}">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6">{utf8_encode($maquina['Texto'])}</textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                                               
                                 <input name = "id_maq" type = "hidden" value = "{$maquina['id_Contenido']}&amp;{$maquina['estado']}">
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