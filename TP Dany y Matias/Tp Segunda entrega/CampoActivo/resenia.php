<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        
    <title>Campo Activo S.A.</title> 
        
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  </head>
<body>
		<nav id='menuPrincipal'>
        <div class='menu'>
        
            <ul>
              <li><a href="index.php">Inicio</a></li>
                <li><a href="resenia.php">Reseña</a></li>
                <li id='Maquinarias'><a>Maquinarias</a>
                    <ul>
                          <li><a href="maquina.php?q=N">Nuevas</a></li>
                          <li><a href="maquina.php?q=U">Usadas</a></li>                       
                    </ul>
                </li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="galeria.php">Galería</a></li>
                <li><a href="contacto.php">Contacto</a></li>            
       	    </ul>            
            <form action='busqueda.php' id='search' method='GET' name='q' style='display:inline;'> 
              <input id='search-box' size='28' type='text' value='Buscar...' name='q'></input>   
            </form>
        </div>
    </nav>
    <div id ='logo'>
    	   <img src="images/logo.png" width="250" height="120"  alt=""/>
    </div>

    <div id="divtexto">
  				<p>Campo Activo S.A. es una empresa que fue creada en el año  2001 para satisfacer todas y cada una de las necesidades de sus clientes, cumpliendo  con las exigencias de sus representados. En el año 2003 fue nombrado  concesionario oficial de New Holland.</p>
  				 <p>La mayor preocupación de Campo Activo S.A., es el servicio  post-venta y repuestos, por esta razón la capacitación de su gente y el stock  de repuestos fueron su prioridad. En la actualidad cuenta con un plantel de  personas altamente capacitadas para estar al lado del cliente cuando este lo  necesite. De allí nació su slogan: &quot;<strong>CAMPO ACTIVO S.A., LA EMPRESA QUE LO  PONE MOTOR AL CAMPO</strong> &quot;
          </p>
    </div>

  	<div class = "img_negocio">
      	<img src="images/negocio.jpg"  alt="" width="1000" height="300" />
    </div>
  	<footer>
  			<small>
  		                Copyright &copy; 2014 Daniela - Matias
  			</small>   
  	</footer>
</body>
</html>