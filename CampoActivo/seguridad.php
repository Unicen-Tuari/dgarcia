<form role="form" action="index.php?action=contacto" method="POST" id = "contactForm">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nombre y Apellido</label>
                                <input type="text" class="form-control" placeholder="Nombre y Apellido *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                <!-- <input id="nombre" type="text" class="form-control"> -->
                            </div>
                            <div class="form-group col-lg-4">
                                <label> Direcci&oacuten de Email </label>
                                <input type="email" class="form-control" placeholder="Correo electrónico *" id="email" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                <!-- <input id="correoelectronico" type="email" class="form-control"> -->
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Tel&eacutefono</label>
                                <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                <!-- <input id="telefono" type="tel" class="form-control"> -->
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensaje</label>
                                <textarea class="form-control" placeholder="Comentario *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                <!-- <textarea id="mensaje" class="form-control" rows="6"></textarea> -->
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <div id = "success"></div>
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>
                    </form>