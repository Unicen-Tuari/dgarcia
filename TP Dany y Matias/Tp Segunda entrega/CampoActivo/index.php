<!DOCTYPE html>
<html lang="es">
	<head>
		    <meta charset="UTF-8">
      
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
       	<link rel="stylesheet" href="css/styleespecial.css">
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
    <div id='facebook'>
      <a href="https://www.facebook.com/cristian.peronja.1">
     		<img src="images/facebook.jpg" width="121" height="36"  alt=""/> </a>
    </div>
        
    <div id ='logo'>
    	<img src="images/logo.png" width="250" height="120"  alt=""/>
    </div>
    <footer>
    			<small>
                Copyright &copy; 2014 Daniela - Matias
    			</small>   
		</footer>
	</body>
</html>