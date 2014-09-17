<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" type="text/css" href="css/styleespecial2.css">
        <title>Campo Activo S.A.</title> 
        
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	</head>
<body>
	<div id ='logo'>
	    <img src="images/logo.png" width="250" height="120"  alt=""/>
	</div>

	<h1>Alta de Eventos:</h1>
    
    <section class="altaSection">

		<!--Para que se pueda ingresar un Evento Nuevo -->

		<form action="cargaEventosBase.php" method="post">
			<fieldset>
        		<div class=" adentro"><br>
					Nombre:  
                    <input type="text" name="nombre" required><br>
                    Fecha (AAAA-MM-DD): 
                    <input type="datetime" name="fecha" required ><br>
                    Ubicacion: 
                    <input type="text" name="ubicacion" required><br>
                    Ruta:
                    <input type="text" name="ruta" size= 75 required ><br>
                    Descripción:<br>
                    <textarea rows="6" cols="60" name="texto" required></textarea><br>
					
					<h5>Todos los campos son obligatorio</h5>
					
                    <input type="submit" value="Agregar" class="button">
                        
					<br>
				</div>
			</fieldset>
		</form>	
	</section>
 	
	<footer>
			<small>
		                Copyright &copy; 2014 Daniela - Matias
			</small>   
	</footer>
</body>
</html>