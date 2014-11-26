{include file = "headerC.tpl" title = foo}

<div class="container">        

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Nueva Maquina</strong></h2>
                    <hr>
                        
                    <form role="form" action="indexAdmin.php?action=insertarMaq" method="POST"> 
                        <div class="row">
                            
                            <div class="form-group col-lg-12">
                                <label>Nombre de la M&aacute;quina:</label>
                                <input name="nombre" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Tipo: </label>
                                <input name="tipo" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Modelo: </label>
                                <input name="modelo" type="number" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Estado (U: Usado - N: Nuevo:) </label>
                                <select enabled name="estado"  required >
                                    <option value="NUEVA"> NUEVA </option>
                                    <option value="USADA"> USADA </option>
                                </select><br>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Ruta 1: </label>
                                <input name="ruta" type="text" class="form-control" rows="6">
                                <!-- <label>Ruta 2: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 3:</label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 4: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 5: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 6: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 7: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input>
                                <label>Ruta 8: </label>
                                <input name="ruta" type="text" class="form-control" rows="6"></input> -->
                            </div>
                            <div class="form-group col-lg-12">
                                <label> Precio U$S: </label>
                                <input name="precio" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Descripci&oacute;n: </label>
                                <textarea rows="6" cols="60" name="texto" type="text" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

{include file = "footer.tpl"}