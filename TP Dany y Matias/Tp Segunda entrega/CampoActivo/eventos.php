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
    $sql = "select c.id_contenido as id_Contenido, c.nombre as Nombre,e.fecha as Fecha, e.ubicacion as Ubicacion, c.texto as Texto
    from evento e  
        join contenido c on (c.id_contenido = e.id_contenido)
    where (c.id_contenido = e.id_contenido)";

    $sql2 ="select e.id_contenido as id_Contenido, i.ruta as Ruta
    from imagenes i
        join evento e on (e.id_contenido = i.id_contenido)
    where (e.id_contenido = i.id_contenido)";

    //Ejecución
    $q	= $conn->query($sql);
    $q2 = $conn->query($sql2);

    //Si es null, hubo un error
    if(!$q)
    {
      die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
    }

    if(!$q2)
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
        <h1>Eventos</h1>
        
        <?php
                while($descripcion[] = $q->fetch()){}

                $cantidad = count($descripcion);
                $cantidad--;
                
                while($ruta[] = $q2->fetch()){}
                $cantidad_Ruta = count($ruta);
                $cantidad_Ruta--;
                
                $pos=0;
                while ($pos < $cantidad)
                {
                    $indice = $descripcion[$pos]['id_Contenido'];
                    $nombre = $descripcion[$pos]['Nombre'];
                    $fecha = $descripcion[$pos]['Fecha'];
                    $ubicacion = $descripcion[$pos]['Ubicacion'];
                    $texto = $descripcion[$pos]['Texto'];
                    
        ?>

        <div class="galeria"> 
            
            <div class="dato">
                <h2> <?php echo utf8_encode($nombre).'<br>';?> </h2>
            </div>

            <div class="texto">
                <p><?php echo utf8_encode($texto).'<br>';?> </p>
            </div>

            <div class="dato">
                <h3>Fecha del Evento: <?php echo utf8_encode($fecha).'<br>';?> </h3>
            </div>

            <div class="dato">
                <h3>Ubicacion: <?php echo utf8_encode($ubicacion).'<br>';?> </h3>
            </div>

            <div class="imagenes">
                <?php 
                $pos_Ruta = 0; 
                    while($pos_Ruta < $cantidad_Ruta){ 
                        if ($indice === $ruta[$pos_Ruta]['id_Contenido']){
                ?>
                            <img src="<?php echo $ruta[$pos_Ruta]['Ruta']; ?>"  width="250" height="250"/>
                <?php 
                        }
                        $pos_Ruta++;
                    }
                ?>
            </div>
                
        </div>
            <h4> <br> </h4>
            <?php 

                     $pos++;
                }

            ?>

		<footer>
			<small>
		                Copyright &copy; 2014 Daniela - Matias
			</small>   
		</footer>
	</body>
</html>