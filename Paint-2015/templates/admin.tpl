{include file="headerAdmin.tpl" title=foo}

<div class="top-banner"></div>	

    <div class="container">

      <div class="page-header">
        <h1>Lista de Noticias</h1>
      </div>

      <div class="row" id="noticias">
        {include file="noticiasPartial.tpl" }
      </div>
   
      <div class="row">
        <div class="col-md-6">
          <form id="miform" action="admin.php?action=agregar_novedad" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="task">Novedad</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Tilulo">
            </div>
            <div class="form-group">
              <label for="task">Contenido</label>
              <input type="text" class="form-control" id="contenido" name="contenido" placeholder="Contenido">
            </div>
            <div class="form-group">
              <label for="imagesToUpload">Imagenes</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
            </div>

            <button type="submit" class="btn btn-default">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/funcionesAdmin.js"></script>
  </body>
</html>



