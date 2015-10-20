{include file="headerAdmin.tpl" title=foo}

<div class="top-banner"></div>	

    <div class="container">

      <div class="page-header text-center">
        <h1>Lista de Novedades</h1>
      </div><br>

      <div class="row" id="noticias">
        {include file="noticiasPartial.tpl" }
      </div>
   
      <div class="row">
        <div class="col-md-12">
          <form id="miform" action="admin.php?action=agregar_novedad" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Categoria</label>

              <select name="id_categoria">
                {foreach $categorias as $categoria}
                <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>
                {/foreach}
              </select>
            </div>
            <div class="form-group">
              <label for="task">T&iacutetulo Novedad</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Tilulo">
            </div>
            <div class="form-group">
              <label for="task">Contenido</label>
              <input type="text" class="form-control" id="contenido" name="contenido" placeholder="Contenido">
            </div>
            <div class="form-group id="imagenes" ">
              <label for="imagesToUpload">Im&aacute;genes</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div><br><br>

{include file="footerAdmin.tpl"}
    



