<?php

    //Configuración
    $host 	= "localhost";
    $db	= "campoactivo";
    $user	= "root";
    $pass	= "";

    //TODO: verificar que mensaje este seteado 
    $consulta = $_GET["q"];

    //Conexión
    try{

    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    }
    catch(PDOException $pe)
    {
        die('Error de conexion, Mensaje: ' .$pe->getMessage());
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
<?php

    //Consultas
    $sql = "select *
            from maquinas m
                join contenido c on (m.id_contenido= c.id_contenido)
            where ((m.modelo like :id) or (m.precio like :id) 
                or (m.tipo like :id) or (c.nombre like :id) or (c.texto like :id))";

    $sql2 ="select m.id_contenido as id_Contenido, i.ruta as Ruta
            from imagenes i
                join maquinas m on (m.id_contenido = i.id_contenido)
            where ((m.id_contenido = i.id_contenido) and (i.id_contenido = :id2));";


    //Ejecucion
       
        $Bcompleja = '%'.$consulta.'%';/* Concateno para la busqueda con los comodines */

        $q = $conn->prepare($sql);
        $q->execute(array(':id'=>$Bcompleja));

    //Si es null, hubo un error
    if(!$q)
        {
          die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
        }
       
?>
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

<h1> <?php echo 'Resultado de la b&uacute;squeda de "'.$consulta.'"<br>';?> </h1>
<?php

    while ($descripcion = $q->fetch())
    {
        $indice = $descripcion['id_contenido'];
        $estado = $descripcion['estado'];
        $nombre = $descripcion['nombre'];
        $modelo = $descripcion['modelo'];
        $tipo   = $descripcion['tipo'];
        $precio = $descripcion['precio'];
        $texto  = $descripcion['texto'];     
?>
    <div class="galeria"> 
        <div class="dato">
            <h2> <?php echo $nombre.'<br>';?> </h2>
        </div>

        <div class="dato">
            <h4>Estado:  <?php 
                                if($estado === 'U'){echo 'Usado<br>';}
                                else {echo 'Nuevo<br>';}
                        ?> </h4>
        </div>

        <div class="dato">
            <h4> Modelo: <?php echo utf8_encode ($modelo).'<br>';?> </h4>
        </div>

        <div class="dato">
            <h4> Tipo: <?php echo utf8_encode($tipo).'<br>';?> </h4>
        </div>

        <div class="dato">
            <h4> Precio: U$S <?php echo $precio.'<br>';?> </h4>
        </div>

        <div class="texto">
            <p><?php echo utf8_encode($texto).'<br>';?> </p>
        </div>

        <div class="imagenes">
            <?php 
                $q2 = $conn->prepare($sql2);
                $q2->execute(array(':id2'=>$indice));

                if(!$q2)
                {
                  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
                }

                while($ruta = $q2->fetch()){
            ?>
                    <img src="<?php echo $ruta['Ruta']; ?>"  width="250" height="250"/>
            <?php
                }
            ?>
        </div> 
    </div>
    <h4> <br> </h4>
<?php 
    }
?>    
    <footer>
        <small>
                    Copyright &copy; 2014 Daniela - Matias
        </small>   
    </footer>
    </body>
</html>