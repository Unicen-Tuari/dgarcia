<?php
    //Configuración
    $host 	= "localhost";
    $db	= "campoActivo";
    $user	= "root";
    $pass	= "";

    //Conexión
    try{
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    }
    catch(PDOException $pe)
    {
    	die('Error de conexion, Mensaje: ' -$pe->getMessage());
    }

    //Consulta
    $sql = "select *
    		from imagenes i 
    		join maquinas m on (i.id_contenido = m.id_contenido)
    		where (i.id_contenido = m.id_contenido);";

    //Ejecucion
    $q	 = $conn->query($sql);

    //Si es null, hubo un error
    if(!$q)
    {
      die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
    }

?>

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
		<h1>Galería de imágenes</h1>
        <div class="galeria"> 
        	<div class="imagenes">
                <?php
    				$q = $conn->query($sql);
    				while($r = $q->fetch()){
    					// GUARDO LA RUTA DE LA IMAGEN SELECCIONADA
    					$fotoactual = $r['ruta'];
    					?>
                    <img src="<?php echo $fotoactual ?>"  width="250" height="250"/>
                <?php
    				}
    			?>
            </div>   	  
        </div>
        
		<footer>
			<small>
		                Copyright &copy; 2014 Daniela - Matias
			</small>   
		</footer>
	</body>
</html>